<?php 

  require("conecta.php");

  function data($data)
  {
    return date("d/m/Y", strtotime($data));
  }

  $sql = "SELECT * FROM `empresa_delivery` ORDER BY created DESC";
  $result = $conn->query($sql);
  
    if ($result->num_rows >= 0) {
        echo "
        <div class=''>
            <div class='row'>
        ";
        while ($row = $result->fetch_array()) {
            echo "
            <div id='cardsempresas' class='col l3'>
                    <div class='card'>
                        <div class='card-content center'>
                            <h4 class='card-title'>".$row['nome_empresa']."</h4>
                            <h6 style='font-weight: 600'>".$row['seguimento']."</h6>
                            <h6>".$row['cidade']." - ".$row['UF']."</h6>
                            <p>Whatsapp: ".$row['whatsapp']."</p>
                            <p>Telefone: ".$row['telefone']."</p><br />
                            <div class='card-action'>
                                <h5 style='font-weight: 600'>Descrição:</h5>
                                <p>".$row['descricao']."</p>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        echo "
            </div>
        </div>
        ";
    }