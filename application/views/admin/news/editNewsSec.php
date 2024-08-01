                    
                                    
                                    <div class="col-md-12">
                                     <div class="card-body pt-4">
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $viewNews['id'];?>" placeholder="Enter Sector Name">
                                     <input type="text" name="news_title" value="<?php echo $viewNews['news_title'];?>" id="news_title" class="form-control" placeholder="Enter Sector Name">
                                     </div>
                                     </div>
                                     </div>

                                     <div class="col-md-12" style="margin-top:0.5rem;margin-bottom:2rem;">
                                     <div class="card-body">
                                     <label for="">Description *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <textarea  name="description" class="form-control"  id="description" cols="30" rows="2"><?php echo $viewNews['description'];?></textarea>
                                     </div>
                                     </div>
                                     </div>