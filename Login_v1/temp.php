<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="./fonts/typography-font/typo.css">
  <link rel="stylesheet" href="./fonts/fontawesome-5/css/all.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div style=" height: 0px; text-align: center; margin: 80px">

          <h1><i class="tachometer alternate icon"></i>Conversor de temperaturas</h1>

        </div>

        <div style=" width: 20%; margin: 0 auto;">

          <?php
          //Fahrenheit to celsius
          function fahrenheit_to_celsius($given_value)
          {
            $celsius = 5 / 9 * ($given_value - 32);
            return $celsius;
          }
          //Fahrenheit to kelvin
          function fahrenheit_to_kelvin($given_value)
          {
            $kelvin = fahrenheit_to_celsius($given_value) + 273.15;
            return $kelvin;
          }
          //Celsius to fahrenheit
          function celsius_to_fahrenheit($given_value)
          {
            $fahrenheit = $given_value * 9 / 5 + 32;
            return $fahrenheit;
          }
          //Celsius to kelvin 
          function celsius_to_kelvin($given_value)
          {
            $kelvin = $given_value + 273.15;
            return $kelvin;
          }
          //Kelvin to fahrenheit equation
          function kelvin_to_fahrenheit($given_value)
          {
            $fahrenheit = 9 / 5 * ($given_value - 273.15) + 32;
            return $fahrenheit;
          }
          //Kelvin to celsius equation
          function kelvin_to_celsius($given_value)
          {
            $celsius = $given_value - 273.15;
            return $celsius;
          }



          ?>
          
          <form action="" method="post">
            <table>

              <tr>
                <td>


                  <select name="first_temp_type_name" class="form-select" aria-label="Default select example">

                    <option value="fahrenheit">Fahrenheit</option>
                    <option value="celsius">Celsius</option>
                    <option value="kelvin"> Kelvin </option>
                  </select>

                </td>
              </tr>
              <tr>
                <td>


                  <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="sort numeric up icon"></i>Valor</span>
                    <input type="text" name="given_value" class="form-control" placeholder="0" aria-label="Username" aria-describedby="addon-wrapping">
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <select name="second_temp_type_name" class="form-select" aria-label="Default select example">
                    <option value="fahrenheit">Fahrenheit</option>
                    <option value="celsius">Celsius</option>
                    <option value="kelvin">Kelvin</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <br>
                  <div style="text-align: center;">
                    <button class="fluid ui green button" type="submit" name="btn" value="Convert">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Converter</font>
                      </font>
                    </button>

                    <br>
                  </div>
        </div>
        </td>
        </tr>
        <tr>
          <td>

            <?php
            if (isset($_POST['btn'])) {

              $first_temp_type_name = $_POST['first_temp_type_name'];
              $second_temp_type_name = $_POST['second_temp_type_name'];
              $given_value = $_POST['given_value'];

              //Fahrenheit to celsius and kelvin
              if ($first_temp_type_name == 'fahrenheit') {
                if ($second_temp_type_name == 'celsius') {
                  $celsius = fahrenheit_to_celsius($given_value);
                  echo '<div class="alert alert-primary" role="alert">';
                  echo "$given_value Fahrenheit = $celsius Celsius";
                  echo '</div>';
                } elseif ($second_temp_type_name == 'kelvin') {
                  $kelvin = fahrenheit_to_kelvin($given_value);
                  echo '<div class="alert alert-primary" role="alert">';
                  echo "$given_value Fahrenheit = $kelvin Kelvin";
                  echo '</div>';
                } else {
                  echo '<div class="alert alert-primary" role="alert">';
                  echo "$given_value Fahrenheit";
                  echo '</div>';
                }
              }
              //Celsius to fahrenheit and kelvin
              if ($first_temp_type_name == 'celsius') {
                if ($second_temp_type_name == 'fahrenheit') {
                  $fahrenheit = celsius_to_fahrenheit($given_value);
                  echo '<div class="alert alert-primary" role="alert">';
                  echo "$given_value Celsius  = $fahrenheit Fahrenheit";
                  echo '</div>';
                } elseif ($second_temp_type_name == 'kelvin') {
                  $kelvin = celsius_to_kelvin($given_value);
                  echo '<div class="alert alert-primary" role="alert">';
                  echo "$given_value Celsius   = $kelvin Kelvin";
                  echo '</div>';
                } else {
                  echo '<div class="alert alert-primary" role="alert">';
                  echo "$given_value Celsius";
                  echo '</div>';
                }
              }
              //Kelvin to fahrenheit and celsius
              if ($first_temp_type_name == 'kelvin') {
                if ($second_temp_type_name == 'fahrenheit') {
                  $fahrenheit = kelvin_to_fahrenheit($given_value);
                  echo '<div class="alert alert-primary" role="alert">';
                  echo "$given_value Kelvin  = $fahrenheit Fahrenheit";
                  echo '</div>';
                } elseif ($second_temp_type_name == 'celsius') {
                  $celsius = kelvin_to_celsius($given_value);
                  echo '<div class="alert alert-primary" role="alert">';
                  echo "$given_value Kelvin  = $celsius Celsius";
                  echo '</div>';
                } else {
                  echo '<div class="alert alert-primary" role="alert">';
                  echo "$given_value Kelvin";
                  echo '</div>';
                }
              }
            }

            ?>
          </td>
        </tr>
        </table>
        </form>


      </div>