                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            "nameProduct" => $nameProduct
                            );
                            array_push($result, $temp);
                            return $result;
                     } else {
                            $temp = array("message" => "not found item");
                            array_push($result, $temp);
                            return $result;
                     }
              }
       }

       function deleteItemCartInSession($productCode, $sizeCode)
       {
              $result = array();
              if (session_status() == PHP_SESSION_NONE) {
                     session_start();
              }
              if (isset($_SESSION['cart'])) {
                     $cartArr = $_SESSION['cart'];
                     $flag = false; // Sử dụng biến boolean thay vì số nguyên
                     $nameProduct = '';
                     $quantityBuy = '';
                     $type = '';
                     foreach ($cartArr as $index => $item) {
                            if ($item['productCode'] == $productCode) {
                                   $type = $item['type'];
                                   if ($type == 'shirtProduct' && $sizeCode == $item['sizeCode']) {
                                          $nameProduct = $item['nameProduct'];
                                          $quantityBuy = $item['quantityBuy'];

                                          unset($cartArr[$index]); // Xóa phần tử từ mảng
                                          $flag = true;
                                          break; // Dừng vòng lặp sau khi tìm thấy và xóa phần tử
                                   }
                                   if ($type == 'handbagProduct') {
                                          $nameProduct = $item['nameProduct'];
                                          $quantityBuy = $item['quantityBuy'];

                                          unset($cartArr[$index]); // Xóa phần tử từ mảng
                                          $flag = true;
                                          break; // Dừng vòng lặp sau khi tìm thấy và xóa phần tử
                                   }
                            }
                     }
                     if (!$flag) {
                            $temp = array("message" => "notFount");
                            array_push($result, $temp);
                            return $result;
                     } else {
                            // Cập nhật lại chỉ số của các phần tử còn lại trong mảng
                            $cartArr = array_values($cartArr);
                            $_SESSION['cart'] = $cartArr;
                            $temp = array(
                                   "message" => "success",
                                   "productCode" => $productCode,
                                   "nameProduct" => $nameProduct,
                                   "sizeCode" => $sizeCode,
                                   "type" => $type,
                                   "quantityBuy" => $quantityBuy
                            );
                            array_push($result, $temp);
                            return $result;
                     }
              } else {
                     $temp = array("message" => "cart chua duoc khoi tao");
                     array_push($result, $temp);
                     return $result;
              }
       }

       // getArrCart
       function getArrCart()
       {
              if (session_status() == PHP_SESSION_NONE) {
                     session_start();
              }
              $result = array();
              if (isset($_SESSION['cart'])) {
                     $arrCart = $_SESSION['cart'];
                     foreach ($arrCart as $item) {
                            // lay ten sizeCode
                            $nameSize = 'null';
                            if($item['sizeCode'] != 'null'){
                                   $temp = $this->SizeDAL->getObj($item['sizeCode']);
                                   $nameSize = $temp->getSizeName();
                            }
                            $obj = array(
                                   "productCode" => $item['productCode'],
                                   "nameProduct" => $item['nameProduct'],
                                   "imgProduct" => $item['imgProduct'],
                                   "price" => $item['price'],
                                   "promotion" => $item['promotion'],
                                   "quantityBuy" => $item['quantityBuy'],
                                   "sizeCode" => $item['sizeCode'],
                                   "sizeName" => $nameSize,
                                   "type" => $item['type']
                            );
                            array_push($result, $obj);
                     }
                     return $result;
              } else {

                     $obj = array(
                            "productCode" => '',
                            "nameProduct" => '',
                            "imgProduct" => '',
                            "quantityBuy" => '',
                            "type" => ''
                     );
                     array_push($result, $obj);
                     return $result;
              }
       }

       // làm sạch cart khi không tìm thấy tài khoản
       function clearCart()
       {
              if (session_status() == PHP_SESSION_NONE) {
                     session_start();
              }
              if (isset($_SESSION['username']) == false) {
                     session_start();
                     session_unset();
                     session_destroy();
              }
       }
}

// muc luc
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $check = new OrderBLL();
       $function = $_POST['function'];

       switch ($function) {
              case 'addCartToSession':
                     $productCode = $_POST['code'];
                     $type = $_POST['type'];
                     $quantityBuy = (int)$_POST['quantityBuy'];
                     $sizeCode = $_POST['sizeCode'];
                     $temp = $check->addCartToSession($productCode, $type, $quantityBuy, $sizeCode);
                     echo json_encode($temp);
                     break;

              case 'getArrCart':
                     $temp = $check->getArrCart();
                     echo json_encode($temp);
                     break;

              case 'clearCart':
                     $check->clearCart();
                     break;

              case 'deleteItemCartInSession':
                     $productCode = $_POST['code'];
                     $sizeCode = $_POST['sizeCode'];
                     $temp = $check->deleteItemCartInSession($productCode, $sizeCode);
                     echo json_encode($temp);
                     break;
       }
}
