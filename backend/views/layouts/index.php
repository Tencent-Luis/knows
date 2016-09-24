        <!-- Header-->
        <?= $this->render('header'); ?>

        <!--左侧菜单-->
        <?= $this->render('left'); ?>

        <!-- Main Content -->
        <div id="content" class="content">
            <?= $content ?>
        </div>
    </div>
    <!-- Footer-->
    <?= $this->render('footer'); ?>
<?php $this->endBody(); ?>
    <script type="text/javascript">
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
</body>
</html>
<?php $this->endPage(); ?>