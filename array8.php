<html>
    <body>
        <?php
       $transactions = array(
        array(
            "debit"=>2,
            "credit"=>3
        ),
        array(
            "debit"=>15,
            "credit"=>14
        )
    );
 /** 
    $transactions = array(
         array(
            "debit"=>2,
            "credit"=>3,
            "amount"=>1
            ),
        array(
            "debit"=>15,
            "credit"=>14,
            "amount"=>1
         )
         
); 
 **/

        $new_transactions = array();
        foreach( $transactions as $transaction ) {
            $new_transaction = $transaction;
            $new_transaction[ "amount" ] = abs( $transaction[ "debit" ] - $transaction[ "credit" ] );
            $new_transactions[] = $new_transaction;
        }
        $transactions = $new_transactions;

        echo     $new_transactions;
        ?>
    </body>
</html>