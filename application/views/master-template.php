<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <?php echo $this->load->view(CDN_HEADER, NULL, true); ?>

    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
          <?php echo $this->load->view(PRIMARY_NAV, NULL, true); ?>
            <!-- PAGE CONTENT -->
            <div class="page-content">

                <?php echo $this->load->view(HEADER_NAV, NULL, true) ?>

                <?php echo $main_content; ?>

            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url() ?>app/logout" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

    <!-- Start FOOTER CDN -->
      <?php echo $this->load->view(CDN_FOOTER, NULL, true); ?>
    <!-- END FOOTER CDN -->
    </body>
</html>
