<? 

        require_once $_SERVER['DOCUMENT_ROOT'].'/conexao.php';
   

        $queryString = filter_input(INPUT_SERVER, 'QUERY_STRING');
 

        parse_str($queryString, $parseQueryString);
 
        $termo = $parseQueryString['pesq_ncm'];

        setlocale(LC_ALL,'pt_BR.UTF8');
        mb_internal_encoding('UTF8'); 
        mb_regex_encoding('UTF8');
        header('Content-Type: text/html; charset=UTF-8');
        //$descr = mysqli_real_escape_string($_POST['pesq_ncm']);
 
        // Processing form data when form is submitted
       
            if($descr){ // && empty($password_err) && empty($confirm_password_err)){
                
                // Prepare an insert statement
                //$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        
                $sql = "SELECT * FROM tb_ncm WHERE descricao LIKE '%" . $termo . "%'";
                //echo $sql;

                if ($conexao->query($sql) === TRUE) {
                    //echo "New record created successfully";
                    //header ('Location: list_prod_page.php');
                } else {
                    //echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $result = mysqli_query($conexao, $sql);
                if (!$result) {
                    printf("Query failed: %s\n", $mysqli->error);
                    exit;
                  }      
                  
                  
                  $i = 0;
                  $json_in = array();
                  $myArray = array();
                  $tempArray = array();
                  
                  
                  while ($row = $result->fetch_object()) {
                      $tempArray = $row;
                      array_push($myArray, $tempArray);
                  }
                  echo json_encode($myArray);
                //echo $result;

            }

        
    ?>
