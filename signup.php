<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
<!--                 <form name="listsform" id="listsform" method="post" action="http://members.greenpeace.org/subscribe/subscribe.php" target="_parent" onsubmit="_gaq.push(['_linkByPost', this]); return verifySubscribeForm();">
                    <input type="hidden" name="interest" value="1281">
                    <input type="hidden" name="oc" value="gp-website">
                    <fieldset class="CenterSignUp">
                        
                        <p style="padding-left:15px;">
                        <input type="text" name="email" size="33" id="CenterSignUp" value="Enter your E-mail address" class="email" onfocus="clearDefault(this)" onblur="replaceInputMsg(this, 'email')">
                        <span style="opacity: 1; left: 253px; top: 33.5px; width: 19px; min-width: 19px; height: 13px; position: absolute; border: none; display: inline; visibility: visible; z-index: auto; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAANCAYAAABLjFUnAAAACXBIWXMAAAsTAAALEwEAmpwYAAABMmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarZG9SsNQGIaf04qCQxAJbsLBQVzEn61j0pYiONQokmRrkkMVbXI4Of508ia8CAcXR0HvoOIgOHkJboI4ODgECU4i+EzP9w4vL3zQWPE6frcxB6PcmqDnyzCK5cwj0zQBYJCW2uv3twHyIlf8RMD7MwLgadXr+F3+xmyqjQU+gc1MlSmIdSA7s9qCuATc5EhbEFeAa/aCNog7wBlWPgGcpPIXwDFhFIN4BdxhGMXQAHCTyl3AtercArQLPTaHwwMrN1qtlvSyIlFyd1xaNSrlVp4WRhdmYFUGVPuq3Z7Wx0oGPZ//JYxiWdnbDgIQC5M6q0lPzOn3D8TD73fdMb4HL4Cp2zrb/4DrNVhs1tnyEsxfwI3+AvOlUD7FY+VVAAAAIGNIUk0AAHolAACAgwAA9CUAAITRAABtXwAA6GwAADyLAAAbWIPnB3gAAAECSURBVHjapNK9K8UBFIfxD12im8LEYLgZjcpgUFgUCUlZTJRkMpqUxR+hDFIGhWwGwy0MFiUxSCbZ5DXiYjnqdvvpvnim0+mcZ/ieU9U6tySBNEbQjBpMoANZnGIdl4VLKcm8YCPqbgzhAT1ox1mSrFpxjtCHLdygH5tJgymlMYhhtKH+r6FishYsYBpN0dvFHu5wi9okWToC/0AmcpqM+pd7PKMRDajDNb5xlS97Qyem0BsL8IT9uOAhXpGLvL/wGXO5fFkOO7FwHvJtLOOilGALM8vE1d6xiFVlkP8aXTjAI8bKFeXLBuJ3shjFiQpIYR6zWMFaXFOlsnHM4Ng/+RkAdVE2mEeC7WYAAAAASUVORK5CYII=); background-size: 19px 13px; background-position: 0px 0px; background-repeat: no-repeat;"></span></p>
                        <p style="padding-left:15px;">
                        <input type="text" name="fname" size="20" id="FirstName" value="First name" class="fname" onfocus="clearDefault(this)" onblur="replaceInputMsg(this, 'fname')">  <input type="text" name="zip" id="ZipCode" value="US Zip" class="zip" size="10" onfocus="clearDefault(this)" onblur="replaceInputMsg(this, 'zip')">
                        <span style="opacity: 1; left: 168px; top: 73.5px; width: 19px; min-width: 19px; height: 13px; position: absolute; border: none; display: inline; visibility: visible; z-index: auto; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAANCAYAAABLjFUnAAAACXBIWXMAAAsTAAALEwEAmpwYAAABMmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarZG9SsNQGIaf04qCQxAJbsLBQVzEn61j0pYiONQokmRrkkMVbXI4Of508ia8CAcXR0HvoOIgOHkJboI4ODgECU4i+EzP9w4vL3zQWPE6frcxB6PcmqDnyzCK5cwj0zQBYJCW2uv3twHyIlf8RMD7MwLgadXr+F3+xmyqjQU+gc1MlSmIdSA7s9qCuATc5EhbEFeAa/aCNog7wBlWPgGcpPIXwDFhFIN4BdxhGMXQAHCTyl3AtercArQLPTaHwwMrN1qtlvSyIlFyd1xaNSrlVp4WRhdmYFUGVPuq3Z7Wx0oGPZ//JYxiWdnbDgIQC5M6q0lPzOn3D8TD73fdMb4HL4Cp2zrb/4DrNVhs1tnyEsxfwI3+AvOlUD7FY+VVAAAAIGNIUk0AAHolAACAgwAA9CUAAITRAABtXwAA6GwAADyLAAAbWIPnB3gAAAECSURBVHjapNK9K8UBFIfxD12im8LEYLgZjcpgUFgUCUlZTJRkMpqUxR+hDFIGhWwGwy0MFiUxSCbZ5DXiYjnqdvvpvnim0+mcZ/ieU9U6tySBNEbQjBpMoANZnGIdl4VLKcm8YCPqbgzhAT1ox1mSrFpxjtCHLdygH5tJgymlMYhhtKH+r6FishYsYBpN0dvFHu5wi9okWToC/0AmcpqM+pd7PKMRDajDNb5xlS97Qyem0BsL8IT9uOAhXpGLvL/wGXO5fFkOO7FwHvJtLOOilGALM8vE1d6xiFVlkP8aXTjAI8bKFeXLBuJ3shjFiQpIYR6zWMFaXFOlsnHM4Ng/+RkAdVE2mEeC7WYAAAAASUVORK5CYII=); background-size: 19px 13px; background-position: 0px 0px; background-repeat: no-repeat;"></span><span style="opacity: 1; left: 252px; top: 73.5px; width: 19px; min-width: 19px; height: 13px; position: absolute; border: none; display: inline; visibility: visible; z-index: auto; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAANCAYAAABLjFUnAAAACXBIWXMAAAsTAAALEwEAmpwYAAABMmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarZG9SsNQGIaf04qCQxAJbsLBQVzEn61j0pYiONQokmRrkkMVbXI4Of508ia8CAcXR0HvoOIgOHkJboI4ODgECU4i+EzP9w4vL3zQWPE6frcxB6PcmqDnyzCK5cwj0zQBYJCW2uv3twHyIlf8RMD7MwLgadXr+F3+xmyqjQU+gc1MlSmIdSA7s9qCuATc5EhbEFeAa/aCNog7wBlWPgGcpPIXwDFhFIN4BdxhGMXQAHCTyl3AtercArQLPTaHwwMrN1qtlvSyIlFyd1xaNSrlVp4WRhdmYFUGVPuq3Z7Wx0oGPZ//JYxiWdnbDgIQC5M6q0lPzOn3D8TD73fdMb4HL4Cp2zrb/4DrNVhs1tnyEsxfwI3+AvOlUD7FY+VVAAAAIGNIUk0AAHolAACAgwAA9CUAAITRAABtXwAA6GwAADyLAAAbWIPnB3gAAAEBSURBVHjapNK9K4UBFMfxD12im8JkMdyMRmUwKCyKhKQsJspgcjerxR+hDFIGhWwGwy0MFiUxSCbZ5DXiYjnqSY/ui+90Op3zHX7n1OTzeSlkMYpW1GESnSjgBGu4+L2Ukc4z1qPuwTDu0YsOnKbJapXmEP3YxDUGsJE2mFEeQxhBOxr/Giola8MCZtASvR3s4hY3qE+TZSPwd+Qip6mof7jDE5rRhAZc4QuXSdkrujCNvliAR+zFBQ/wgmLk/YmPmCsmZUVsx8JZyLewhPNygv2dWS6u9oZFrKiA5Gt0Yx8PGK9UlJQNxu8UMIZjVZDBPOawjNW4pmplE5jFkX/yPQDFYTbukzAYUgAAAABJRU5ErkJggg==); background-size: 19px 13px; background-position: 0px 0px; background-repeat: no-repeat;"></span></p>
                        <p align="center">
                        <input type="submit" name="submit" value=" " class="CenterSignUp" style="z-index: 100; position:relative; cursor:hand; cursor:pointer;">
                        </p>
                        
                    </fieldset>
                </form> -->
                <h2 class="text-center">Stay Informed</h2>
                <form name="listsform" id="listsform" method="post" action="http://members.greenpeace.org/subscribe/subscribe.php" target="_blank" onsubmit="_gaq.push(['_linkByPost', this]); return verifySubscribeForm();">
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="interest" value="1281">
                        <input class="form-control" type="hidden" name="oc" value="gp-website">
                        <input class="form-control" type="text" name="email" id="CenterSignUp" value="Enter your E-mail address" onfocus="clearDefault(this)" onblur="replaceInputMsg(this, 'email')">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="fname" size="20" id="FirstName" value="First name" onfocus="clearDefault(this)" onblur="replaceInputMsg(this, 'fname')">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="submit" value="Get Updates" class="CenterSignUp">Get Updates</button>
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