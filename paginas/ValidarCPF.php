<?php
function validarCPF($cpf)
{
      $cpf = preg_replace("/[^0-9]/", "", $cpf);
      $lenCpf = strlen($cpf);
      
      if($cpf >=11) {
          if ($lenCpf === 11) {
              $cpfFormatado = substr($cpf, 0, 3) . "." .
                              substr($cpf, 3, 3) . "." .
                              substr($cpf, 6, 3) . "." .
                              substr($cpf, 9, 2);
        }
          return $cpfFormatado;
    } else {
          return "Documento invalido";
    }
}
?>