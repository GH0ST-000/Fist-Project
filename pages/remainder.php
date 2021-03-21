<form method="post" action="index.php">
    <!-- Button trigger modal -->
    <button type="button" style="width: 300px;margin-left: 78%;height: 50px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        View Personal Information
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">About You</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    User Email :<?php print_r( $_SESSION['submit']);?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-secondary" oneclick="myFunction()">Log Out From Portal</button>
                </div>
            </div>
        </div>
    </div>
</form>
