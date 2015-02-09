<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
            </div>
            <div class="modal-body">
                <form name="listsform" id="listsform" method="post" action="http://members.greenpeace.org/subscribe/subscribe.php" target="_blank" onsubmit="_gaq.push(['_linkByPost', this]); return verifySubscribeForm();">
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="interest" value="1281">
                        <input class="form-control" type="hidden" name="oc" value="gp-website">
                        <input class="form-control" type="text" name="email" id="CenterSignUp" value="Enter your E-mail address" onfocus="clearDefault(this)" onblur="replaceInputMsg(this, 'email')">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="fname" size="20" id="FirstName" value="First name" onfocus="clearDefault(this)" onblur="replaceInputMsg(this, 'fname')">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="zip" id="ZipCode" value="US Zip" size="10" onfocus="clearDefault(this)" onblur="replaceInputMsg(this, 'zip')">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="submit" value="Get Updates" class="CenterSignUp" aria-label="Close">Keep In Touch</button>
                    </div>
                </form>
            </div>
<!--             <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>