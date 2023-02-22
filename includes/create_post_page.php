<div class="news-feed news-feed-form">
                                 <h3 class="news-feed-title">Create New Post</h3>
                                    <form method="post" enctype="multipart/form-data"  action="includes/createpost.php"  >
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Write something here..."></textarea>
                                    </div>
                                    <ul class="button-group d-flex justify-content-between align-items-center">
                                        <li class="photo-btn">
                                        <label for="photo_upload"><i class="flaticon-gallery"></i>Upload photo </label>
                                        <input type="file" name="photo" id="photo_upload" style="display:none;">
                                        </li>
                                        <li class="video-btn">
                                        <label for="video_upload"><i class="flaticon-video"></i> Upload video</label>
                                        <input type="file" name="video" id="video_upload" style="display:none;">
                                        </li>
                                        <li class="tag-btn">
                                        <input type="text" name="tagged_friends" placeholder="Tag friends">
                                        </li>
                                        <li class="post-btn">
                                        <button type="submit">Post</button>
                                        </li>
                                    </ul>
                                    </form>





                            </div>