<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="./bootstrap-5.3.8-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="icon/css/all.min.css">
    <style>
      * {
        font-family: phetsarath ot;
        justify-content: center;

      }
    </style>
    <script src="Jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      $(function () {
        $("#send").click(function () {
          var a = $("#room_No").val();
          var b = $("#room_type").val();
          var c = $("#price").val();
          var d = $("input[name='status']:checked").val();
          if(!a){
          Swal.fire({
            icon:'warning',
            title:'ເເຈ້ງເຕືອນ',
            text:'ກະລຸນາປ້ອນເບີຫ້ອງ'
          });
          }else if(!b){
          Swal.fire({
            icon:'warning',
            title:'ເເຈ້ງເຕືອນ',
            text:'ກະລຸນາເລືອກປະເພດຫ້ອງ'
          });
          }else if(!c){
            Swal.fire({
            icon:'warning',
            title:'ເເຈ້ງເຕືອນ',
            text:'ກະລຸນາເລືອກລາຄາ'
          });
          
          }else if(!d){
            Swal.fire({
            icon:'warning',
            title:'ເເຈ້ງເຕືອນ',
            text:'ກະລຸນາເລືອກ ສະຖານະຫ້ອງກ່ອນ'
          });
          }else{
            $.get("getEx.php",{
              room_No:a,
              room_type:b,
              price:c,
              status:d
            },
            function(output){
              $("#show").html(output);
            }
            );
          }
        });
         $("#reset").click(function () {
          var a=$("#room_No").val();
          var b=$("#room_type").val();
          var c=$("#price").val();
          var d=$("input[name='status']:checked").val();
          $("#show").html("");
         })
      });
    </script>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div>
          <div class="card">
            <div class="card-header text-center text-white bg-primary">
              <h2 class="text-center" align="center">ຟອມບັນທືກຂໍ້ມູນຫ້ອງ</h2>
            </div>
            <div class="card-body">
              <form action="getEx.php" class="vertical" method="get">
                <div class="mt-2">
                  <label for="">ເບີຫ້ອງ:</label>
                  <input
                    type="text"
                    id="room_No"
                    name="room_No"
                    placeholder="ປ້ອນເບີຫ້ອງ"
                    class="form-control"
                  />
                </div>
                 <div class="mt-2">
                  <label for="">ປະເພດຫ້ອງ: </label>
                  <select name="room_type" id="room_type">
                    <option value=""class="fomr-control">ເລືອກຫ້ອງ</option>
                    <option value="ຫ້ອງພັດລົມ">ຫ້ອງພັດລົມ</option>
                    <option value="ຫ້ອງເເອ">ຫ້ອງເເອ</option>
                    <option value="ຫ້ອງພີເສດ">ຫ້ອງພີເສດ</option>
                  </select>
                </div>
                <div class="mt-2">
                  <label for="">ລາຄາຫ້ອງ / ຄືນ: </label>
                  <select name="price" id="price">
                    <option value=""class="form-control">ເລືອກລາຄາຫ້ອງ</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="500000">500000</option>
                  </select>
                </div>
               
                <div class="mt-2">
                  <label for="">ສະຖານະຫ້ອງ</label><br>
                  <div class="radio-inline"></div>
                  <input type="radio"name="status" value="ວ່າງ">ວ່າງ
                  <input type="radio"name="status" value="ບໍ່ວ່າງ">ບໍ່ວ່າງ
                </div>
                <div class="mt-2">
                  <button type="button" class="btn btn-success" id="send">
                    ສົ່ງຂໍ້ມູນ
                  </button>
                  <button type="button" class="btn btn-danger" id="reset">
                    ລ້າງຂໍ້ມູນ
                  </button>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <div id="show"></div>
            </div>
          </div>
        </div>
  
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header text-white bg-success">
              <h3 align="center">ລາຍງານຂໍ້ມູນ</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>