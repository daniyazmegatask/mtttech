<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css"> <div class="content-wrapper">    <!-- Content Header (Page header) -->    <section class="content-header">      <h1>       <a href="<?php echo base_url();?>admin/blog"> <i class="fa fa-flag" aria-hidden="true"></i> Blog</a>        <small>Edit</small>      </h1>    </section>    <section class="content">            <div class="row">            <div class="col-md-12">                <?php                    $this->load->helper('form');                    $error = $this->session->flashdata('error');                    if($error)                    {                ?>                <div class="alert alert-danger alert-dismissable">                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                    <?php echo $this->session->flashdata('error'); ?>                                    </div>                <?php } ?>                <?php                      $success = $this->session->flashdata('success');                    if($success)                    {                ?>                <div class="alert alert-success alert-dismissable">                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                    <?php echo $this->session->flashdata('success'); ?>                </div>                <?php } ?>                                <div class="row">                    <div class="col-md-12">                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>                    </div>                </div>            </div>            <!-- left column -->            <div class="col-md-12">              <!-- general form elements -->                                                                <div class="box box-primary">                    <div class="box-header">                                           </div><!-- /.box-header -->                    <!-- form start -->                                       <form role="form" id="member_form" action="<?php echo base_url() ?>admin/blog/update" method="post" role="form" enctype="multipart/form-data">                        <div class="box-body">                            <div class="row">                                <div class="col-md-6">                                     <div class="form-group">                           <label for="name"> Title Name </label>                           <input type="text" id="name" name ="name" class="form-control" required="required" value="<?php echo ($edit_data->name)?($edit_data->name):'not'; ?>" >                        </div>                        <!-- Slug-->                                                    <div class="form-group">                           <label for="slug"> Slug Url </label>                           <input type="text" id="slug" name ="slug" class="form-control" readonly required="required" value="<?php echo ($edit_data->slug_url)?($edit_data->slug_url):'not'; ?>" onkeyup="changes_slug(this.value)"  >                            <a href="javascript:" onclick="enable_slug()">Change</a>                           <span id="err_slug" style="color:red;"></span>                        </div>                        <div class="form-group">                           <label for="Description">Description</label></br>                           <textarea name="desc" id="desc" required="required"  rows="4" cols="106">                           <?php echo base64_decode($edit_data->description);?></textarea>                        </div>                        <!--Created By-->                                                     <div class="form-group">                           <label for="Created By">Created By</label>                           <input type="text" id="create" name ="create" class="form-control" value="<?php echo ($edit_data->created_by)?($edit_data->created_by):'Megatask Technologies'; ?>">                        </div>                        <!--Image-->                                                     <div class="form-group">                           <label for="Image">Image</label>                           <input type="file" id="image" name ="image" class="form-control">                           <?php                           if(!empty($edit_data->image))                           {                            ?>                            <img src="<?php echo base_url('uploads/blog/'.$edit_data->image)?>" style="height: 90px;width: 90px;">                            <?php                           }                           ?>                                                   </div>                        <!--Status-->                        <div class="form-group">                           <label for="status">Status</label>                           <select class ="form-control" name="status" id="status">                              <option value="1" <?php echo ($edit_data->status == 1)?'selected':''; ?> >Active</option>                              <option value="0" <?php echo ($edit_data->status == 0)?'selected':''; ?> >Inactive</option>                           </select>                        </div>                                  </div>                                  <div class="col-sm-6">                                                                            <!--Meta Title-->                                                     <div class="form-group">                           <label for="Meta Title">Meta Title</label>                           <input type="text" id="mt-title" name ="mt-title" class="form-control" required="required" value="<?php echo ($edit_data->meta_title)?($edit_data->meta_title):'not'; ?>" >                        </div>                        <!--Meta Description-->                                                     <div class="form-group">                           <label for="Meta Description">Meta Description</label>                           <input type="text" id="mt-desc" name ="mt-desc" class="form-control" value="<?php echo ($edit_data->meta_description)?($edit_data->meta_description):'not'; ?>">                        </div>                        <!--Meta Keyword-->                                                     <div class="form-group">                           <label for="Meta Keyword">Meta Keyword</label>                           <input type="text" id="mt-keyword" name ="mt-keyword" class="form-control"  value="<?php echo ($edit_data->meta_keyword)?($edit_data->meta_keyword):'not'; ?>">                        </div>                        <!--Meta Robot-->                                                     <div class="form-group">                           <label for="Meta Robot">Meta Robot</label>                           <input type="text" id="mt-robot" name ="mt-robot" class="form-control"  value="<?php echo ($edit_data->meta_robot)?($edit_data->meta_robot):'not';?>">                        </div>                        <div class="form-group">                           <label for="Image Alternate Name">Image Alternate Name</label>                           <input type="text" id="img-alt" name ="img-alt" class="form-control" value="<?php echo ($edit_data->img_alt_name)?($edit_data->img_alt_name):'not';?>">                        </div>                                 </div>                        </div><!-- /.box-body -->                        <div class="box-footer">                            <input type="hidden" name="id" value="<?php echo $edit_data->id; ?>"/>                            <input type="submit" class="btn btn-primary" value="Update" id="submit"/>                            <input type="reset" class="btn btn-default" value="Reset" />                        </div>                    </form>                </div>            </div>        </div>        </section></div> <script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>  <script>	$(".delete_old_img").click(function(){		$("#old_img_con").addClass('hidden');		$("#old_img").val('');	});</script><script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script><script>   CKEDITOR.replace( 'desc' );</script><script>   function convertToSlug(str) {    //replace all special characters | symbols with a space  str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')           .toLowerCase();      // trim spaces at start and end of string  str = str.replace(/^\s+|\s+$/gm,'');      // replace space with dash/hyphen  str = str.replace(/\s+/g, '-');    document.getElementById("slug").value=str;   checkSlugUrl(str);  return str;}function checkSlugUrl(slugg){    if(slugg.length >0)    {         $.ajax(        {            type:"POST",            url:"<?php echo base_url();?>admin/blog/check_slug",             data:"slug_url="+slugg+"&id="+<?php echo $edit_data->id; ?>,            success:function(returnVal)            {               if(returnVal=='slug_exist')               {                                   $("#submit").attr('disabled','disabled');                   $("#err_slug").html('Alredy Exist');                   //$("#err_slug").delay(5000).hide(0);               }else               {                                  $("#submit").removeAttr('disabled');                  $("#err_slug").html('Available');                //$("#err_slug").delay(5000).hide(0);            }        }     });      }    }function enable_slug(){   var check_readonl = $("#slug").attr('readonly');   if(check_readonl=='readonly')   {      $("#slug").removeAttr('readonly');   }else   {       $("#slug").attr('readonly','readonly');   }}function changes_slug(valuee){          var str = convertToSlug(valuee);         checkSlugUrl(str);} </script>