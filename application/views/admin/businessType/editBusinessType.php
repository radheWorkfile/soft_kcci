                                        <?php // echo "<pre>"; print_r($editAData); die;?>
                                        <div class="col-md-12">

                                     <input type="hidden" name="id" id="id" value="<?php echo $editAData['id'];?>" class="form-control" placeholder="Enter  Description">
                                           
									                 <div class="card-body">
                                    <label for="">Sector Name *</label>
										               <div class="input-group">
										               <span class="input-group-text"><i class="bi bi-map"></i></span>
										                <select class="form-select busAll" name="sector_name" id="sector_name" aria-label="Default select example">
												            <option selected="">--- Select One ---</option>
                                                            <?php foreach($sectorName as $sec):?>
                                                                <option value="<?php echo $sec['id']?>"<?php echo ($sec['id'] == $editAData['sector_name']) ? "selected" : "" ?>><?php echo $sec['sector_name']?></option>


                                                                
												      <?php endforeach;?>
											</select>
									     </div>
									</div> 
							        
                                    <div class="col-md-12" style="margin-top:0.8rem;margin-bottom:1rem;">
                                     <div class="card-body">
                                     <label for="">Business Type *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="text" name="business_type" id="business_type" value="<?php echo $editAData['business_type'];?>" class="form-control" placeholder="Enter  Description">
                                     </div>
                                     </div>
                                     </div>


                                     <div class="col-md-12" style="margin-top:0.1rem;margin-bottom:1rem;">
                                     <div class="card-body">
                                     <label for="">Description *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="text" name="description" id="description" value="<?php echo $editAData['description'];?>" class="form-control" placeholder="Enter  Description">
                                     </div>
                                     </div>
                                     </div>
                                 