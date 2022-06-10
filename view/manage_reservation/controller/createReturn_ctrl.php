<?php 
if (isset($_POST['create'])) {
    include "../DatabaseCon.php";
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $BorrowerName = validate($_POST['BorrowerName']);
    $BookName = validate($_POST['BookName']);
    $BorrowDate = validate($_POST['BorrowDate']);
    $ReturnDate = validate($_POST['ReturnDate']);
    $ReturnStatus = validate($_POST['ReturnStatus']);

    $ReturnData = 'BorrowerName'.$BorrowerName. 'BookName'.$BookName. 'BorrowDate'.$BorrowDate. 'ReturnDate'.$ReturnDate.'ReturnStatus'.$ReturnStatus ;

    if (empty($BorrowerName)){
        header("Location: ../MReturn.php?error=Borrower Name is required&$ReturnData");
    }elseif (empty($BookName)){
        header("Location: ../MReturn.php?error=Book Name is required&$ReturnData");
    }
    elseif (empty($BorrowDate)){
        header("Location: ../MReturn.php?error=Borrow Date is required&$ReturnData");
    }
    elseif (empty($ReturnDate)){
        header("Location: ../MReturn.php?error=Return Date is required&$ReturnData");
    }
    elseif (empty($ReturnStatus)){
        header("Location: ../MReturn.php?error=Return Status is required&$ReturnData");
    } 
    else{
        $sql = "INSERT INTO returnbook(BorrowerName, ISBN, BookName, BorrowDate, ReturnDate, ReturnStatus) 
                VALUES ('$BorrowerName', '$ISBN', '$BookName', '$BorrowDate', '$ReturnDate','$ReturnStatus')";

        $result = mysqli_query($conn,$sql);

        if ($result) {
            header("Location: ../viewReturn.php?success=successfully created");
        }
    }

}
?>