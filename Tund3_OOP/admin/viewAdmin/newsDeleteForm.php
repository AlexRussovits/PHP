<?php
ob_start();
?>
<div class="container" style="min-height: 400px;">
   <div class="col-md-11">
       <h2>News Delete</h2>
       <?php
        if(isset($test)) {
            if ($test==true) {
                ?>
                <div class="alert alert-info">
                    <strong>Запись удалена.</strong><a href="newsAdmin">Список новостей</a>
                </div>
                <?php
                    }
            elseif ($test==false) {
                ?>
                <div class="alert alert-warning">
                    <strong>Ошибка удаления записи!</strong><a href="newsAdmin">Список новостей</a>
                </div>
                <?php
            }
        }
        else {
            ?>
       <form method="POST" action="newsDelResult?id=<?php echo $id; ?>" enctype="multipart/form-data">
       <table class="table table-bordered">
            <tr>
                <td>News Title</td>
                <td><input type="text" name="Title" class="form-control" required  value=<?php echo $detail['Title'];?>></td>
            </tr>
           <tr>
               <td>News Text</td>
               <td><textarea rows="5" name="Description" class="form-control" required><?php echo  $detail['Description'];?></textarea></td>
           </tr>
           <tr>
               <td>Category</td>
               <td>
                   <select name="Category_id" class="form-control" disabled>
                       <?php
                        foreach ($arr as $row) {
                            echo '<option value="'.$row['id'].'"';
                                if ($row['id']==$detail['Category_id']) echo 'selected';
                                echo '>'.$row['Name'].'</option>';
                       }
                       ?>
                   </select>
               </td>
           </tr>
           <tr>
               <td>Old Picture</td>
               <td><div>
                       <img src="../image/<?php echo $detail['picture'];?>" width="150">
                   </div></td>
           </tr>
           <tr>
               <td>Picture</td>
               <td><div>
                       <input type=file name="picture" style="color:black;">
                   </div></td>
           </tr>
           <tr>
               <td colspan="2">
                    <button type="submit" class="btn btn-primary" name="save">
                        <span class="glyphicon glyphicon-plus"></span> Удалить
                    </button>
                   <a href="newsAdmin" class="btn btn-large btn-success">
                       <i class="glyphicon glyphicon-backward"></i> &nbsp; Назад к списку</a>
               </td>
           </tr>
        </table>
       </form>
       <?php
        }
       ?>
   </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>
