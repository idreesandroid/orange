<?php include_once('header.php'); ?>			
<?php include_once('sidebar.php'); ?>
<!-- Page Wrapper -->
<div class="page-wrapper">
   <div class="content container-fluid">
      <!-- Page Header -->
      <div class="crms-title row bg-white mb-4">
         <div class="col  p-0">
            <h3 class="page-title">
               <span class="page-title-icon bg-gradient-primary text-white mr-2">
               <i class="fa fa-object-group" aria-hidden="true"></i>
               </span> Add New 
            </h3>
         </div>
         <div class="col p-0 text-right">
            <ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
               <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
               <li class="breadcrumb-item active">Add New</li>
            </ul>
         </div>
      </div>
      <!-- /Page Header -->
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title mb-0">SEO Setting</h4>
               </div>
               <div class="card-body">
                  <form action="#">
                     <div class="form-group row">
                        <label class="col-form-label col-md-2">Page Title</label>
                        <div class="col-md-10">
                           <input type="text" class="form-control" placeholder="Page Title">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-2">Meta Title</label>
                        <div class="col-md-10">
                           <input type="text" class="form-control" placeholder="Meta Title" name="meta-title">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-2">Meta Description</label>
                        <div class="col-md-10">
                           <input type="text" class="form-control" placeholder="Meta Description" name="meta-description">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-2">Meta Keyword</label>
                        <div class="col-md-10">
                           <input type="text" class="form-control" placeholder="Meta Keyword" name="meta-kwyword">
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-sm-12">
                           <h4 class="card-title mb-0 section-divider">Page Content</h4>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-2">Short Description</label>
                        <div class="col-md-10">
                           <div class="content-editor">
                              <div id="editor">
                                 <p>This is some sample content.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-2">Page Body</label>
                        <div class="col-md-10">
                           <div class="content-editor">
                              <div id="editor2">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-2">Route URL</label>
                        <div class="col-lg-10">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">https://</span>
                              </div>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-md-2 col-form-label">Page Status</label>
                        <div class="col-lg-10">
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="status" id="active" value="option1" checked="">
                              <label class="form-check-label" for="active">
                              Active
                              </label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="status" id="disactive" value="option2">
                              <label class="form-check-label" for="disactive">
                              Disactive
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-2">Published Date</label>
                        <div class="col-md-10">
                           <p style="margin-top:5px;">25/05/2020</p>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-2">&nbsp;</label>
                        <div class="col-md-2">
                           <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include_once('footer.php'); ?>