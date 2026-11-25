<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css" />
    <style>
      * {
        font-family: "phetsarath ot";
      }
    
    </style> 
    <script src="Jquery.js"></script>
    <script>
      $(function(){
        $("#send").click(function () {
          var a=$("#fname").val();
          var b=$("#lname").val();
          var c=$("input[id='gender']:checked").val();
          $.post("get.php",{
            fname:a,
            lname:b,
            gender:c
          },
          function(output){
            ("#show").html(output);
          }
        );
        });
      });
    </script>
    
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header text-white bg-success">
              <h2 align="center">ຟອມບັນທືກຂໍ້ມູນ</h2>
            </div>
            <div class="card-body">
              <form action="" class="vertical">
                <div class="form-group">
                  <label for="">ຊື່</label>
                  <input
                    type="text"
                    id="fname"
                    name="fname"
                    placeholder="ປ້ອນຊື້"
                    class="form-control"
                  />
                </div>
                <div class="form-group">
                  <label for="">ນາມສະກຸນ</label>
                  <input
                    type="text"
                    id="lname"
                    name="lname"
                    placeholder="ປ້ອນນາມສະກຸນ"
                    class="form-control"
                  />
                </div>
                <div class="form-group">
                  <label for="">ເລືອກເພດ</label>
                  <div class="radio-inline">
                    <input type="radio" id="gender"name="gender" value="ເພດຫຍີງ" />ຫຍີງ
                    <input type="radio"id="gender" name="gender" value="ເພດຊາຍ" />ຊາຍ
                  </div>
                </div>
                <div class="form-group">
               <div class="card-footer">
               <button type="button" class="btn btn-success"id="send">ບັນທືກ</button>
               <button type="button" class="btn btn-danger"id="reset">ຍົກເລກ</button>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <div id="show"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </body>
</html>
