<?php $req = $conn->query("SELECT media from posts where id_user=".$_SESSION['id_session']); ?>

<div class="widget widget-watch-video">
                                <h3 class="widget-title">Watch Video</h3>
                        
                                <div class="watch-video-slides owl-carousel owl-theme">
                                    <?php while ($donner = $req->fetch(PDO::FETCH_ASSOC)) { 
                                        if (pathinfo($donner['media'], PATHINFO_EXTENSION) === 'mp4') { ?>

                                    <div class="video-item">
                                        <img src="assets/images/watch-video/video-1.jpg" alt="image">

                                        <a href="./action/uploads/<?php echo $donner['media'];?>" class="video-btn popup-youtube">
                                            <i class="ri-play-fill"></i>
                                        </a>
                                    </div>
                                <?php } }?>
                                </div>
                            </div>