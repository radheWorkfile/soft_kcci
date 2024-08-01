                                    <div class="col-md-12">
                                       
									                 <div class="card-body">
                                     <input type="hidden" name="id" id="id" value="<?php echo $upindus['id'] ?>"  class="form-control" placeholder="Enter  Description">

                                    <label for="">Sector Name *</label>
										               <div class="input-group">
										               <span class="input-group-text"><i class="bi bi-map"></i></span>
										                <select class="form-select busAll" name="sector_name" id="sector_name" aria-label="Default select example">
												            <option selected="">--- Select One ---</option>
                                                            <?php foreach ($sectr as $upi) { ?>
                                                      <option value="<?php echo $upi['id'] ?> " <?php echo ($upi['id'] == $upindus['sector_name']) ? "selected": "" ?>><?php echo $upi['sector_name'] ?></option>
                                                        <?php } ?>
											</select>
									     </div>
									</div>
							        



                                     <div class="col-md-12" style="margin-top:0.1rem;margin-bottom:1rem;">
                                     <div class="card-body">
                                     <label for="">Industeries Name *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="text" name="industeries_name" id="industeries_name" value="<?php echo $upindus['industeries_name'] ?>"  class="form-control" placeholder="Enter  Description">
                                     </div>
                                     </div>
                                     </div>

                                     <div class="col-md-12" style="margin-top:0.1rem;margin-bottom:1rem;">
                                     <div class="card-body">
                                     <label for="">Description *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="text" name="description" id="description" value="<?php echo $upindus['description'] ?>"    class="form-control" placeholder="Enter  Description">
                                     </div>
                                     </div>
                                     </div>
                                 