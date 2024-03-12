<div class="bg-light rounded p-5">
                    <h3 class="text-uppercase">Leave a comment</h3>
                    <form method="post" action="comment.php">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;" name='name' required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;" name='email' required>
                            </div>
                            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment" name='comment' required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                    
                </div>