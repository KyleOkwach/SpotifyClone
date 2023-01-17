<script src="../javascript/modal_control.js" defer></script>
<script src="../javascript/upload.js" defer></script>
<div class="modal form__div">
    <div class="flex flex__h modal__header">
        <h2>Upload a song</h2>
        <button class="exit btn btn__toggle btn__toggle__exit">
            <h3>&times</h4>
        </button>
    </div>
    <hr>
    <form class="modal__form form__div__login" autocomplete="off" enctype="multipart/form-data">
        <div class="form__error">Error message!</div>
        <div class="modal__form__sect form__div__login-sect">
            <input type="text" name="title" autocomplete="off" required>
            <label for="title">Title of the song</label>
            <span></span>
        </div>
        <div class="form__div__login-sect">
            <input type="text" name="genre" autocomplete="off" required>
            <label for="genre">Genre</label>
            <span></span>
        </div>
        <div class="form__div__login-sect">
            <input type="text" name="album" autocomplete="off" required>
            <label for="album">Album name</label>
            <span></span>
        </div>
        <div class="flex flex__h">
            <button class="upload__audio upload__container-button">
                <div class="flex upload__container-drop">
                    <iconify-icon class="audio__icon" icon="bi:file-earmark-music" width="50" height="50"></iconify-icon>
                    <p id="audio__name">Select audio file</p>
                    <!-- <input name="MAX_FILE_SIZE" value="20971520" type="hidden"/> -->
                    <input type="file" name="audio" id="audio__file" hidden>
                </div>
            </button>
            <button class="upload__image upload__container-button">
                <div class="flex upload__container-drop">
                    <iconify-icon class="image__icon" icon="ic:round-image-search" width="50" height="50"></iconify-icon>
                    <p id="image__name">Slect cover image</p>
                    <input type="file" name="image" id="image__file" hidden>
                </div>
            </button>
        </div>
        <button class="flex flex__h btn btn__form__input" type="submit" name="signup">
            <h4>Upload</h4>
            <iconify-icon icon="line-md:uploading-loop" width="20" height="20"></iconify-icon>
        </button>
    </form>
</div>