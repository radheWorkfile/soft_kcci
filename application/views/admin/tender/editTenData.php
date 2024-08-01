

                                    <div class="col-md-12">
                                     <div class="card-body pt-2 pb-2">
                                     <label for="">Title *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="hidden" name="id" id="id" class="form-control" placeholder="Tender Title" value="<?php echo $viewTenDa['id'];?>">
                                     <input type="text" name="tender_title" id="tender_title" value="<?php echo $viewTenDa['tender_title'];?>" class="form-control" placeholder="Tender Title">
                                    </div>
                                     </div>
                                     </div>
                                
                                      <div class="col-md-12">
                                      <div class="card-body pt-2 pb-2">
                                      <label for="">Description *</label>
                                      <div class="input-group">
                                      <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                      <textarea name="description" id="description" cols="33" class="form-control" rows="2"><?php echo $viewTenDa['description'];?></textarea>
                                      
                                     </div>
                                     </div>
                                     </div>


                                     <div class="col-md-12">
                                     <div class="card-body pt-2 pb-2">
                                     <label for="">Document *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="text" name="doc" id="doc" class="form-control" value="<?php echo $viewTenDa['doc'];?>">
                                     </div>
                                     </div>
                                     </div>