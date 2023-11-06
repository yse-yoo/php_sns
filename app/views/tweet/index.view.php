<?php include(VIEW_DIR . 'components/tweet_form.php') ?>

<div class="tweet-contents">
    <?php foreach ($tweets as $tweet) : ?>
        <div>
            <div class="tweet-body">
                <div class="tweet d-flex">
                    <!-- profile image -->
                    <div class="profile-image">
                        <img src="../images/me.png">
                    </div>

                    <div class="tweet-body">
                        <div>
                            <span class="ms-1 text-secondary">@<?= $tweet['user_name'] ?></span>
                            <span class="ms-1 text-secondary"><?= date('Y/m/d H:i', strtotime($tweet['created_at'])) ?></span>
                        </div>
                        <div class="tweet-text mt-2 mb-2">
                            <?= $tweet['message'] ?>
                        </div>
                        <div class="tweet-nav mb-3">
                            <!-- TODO: いいね（Like）フォーム送信 -->
                            <form>
                                <!-- TODO: name設定 -->
                                <input type="hidden" name="" value="<?= $user['id'] ?>">
                                <input type="hidden" name="" value="<?= $tweet['id'] ?>">

                                <?php if (in_array($tweet['id'], $user_likes)): ?>
                                <button class="btn btn-sm"><img src="../images/svg/heart_active.svg"></button>
                                <span class="like-count"><?= @$like_counts[$tweet['id']] ?></span>
                                <?php else: ?>
                                <button class="btn btn-sm"><img src="../images/svg/heart.svg"></button>
                                <span class="like-count"><?= @$like_counts[$tweet['id']] ?></span>
                                <?php endif ?>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>