<div id="preferences" style="display:none;">
    <h2>Preferences</h2>
    <br>
    <br>
    <form id="preferencesForm"> <!-- Added form tag -->
    <div class="form-check">
    <input class="form-check-input" type="checkbox" id="autoPlayVideosCheckbox">
    <label class="form-check-label" for="autoPlayVideosCheckbox">
        Automatically Play Videos
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" id="showEmailInProfileCheckbox">
    <label class="form-check-label" for="showEmailInProfileCheckbox">
        Show Email in Profile
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" id="enableTwoFactorAuthCheckbox">
    <label class="form-check-label" for="enableTwoFactorAuthCheckbox">
        Enable Two-Factor Authentication
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" id="rememberLoginCheckbox">
    <label class="form-check-label" for="rememberLoginCheckbox">
        Remember Login
    </label>
</div>

        <div class="form-group">
            <label for="languageSelect">Select Language:</label>
            <select class="form-control" id="languageSelect">
                <option value="english">English</option>
                <option value="spanish">Spanish</option>
                <option value="french">French</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fontSizeRange">Adjust Font Size:</label>
            <input type="range" class="form-control-range" id="fontSizeRange" min="12" max="24" value="16">
        </div>
        <br>
    <br>
        <button type="submit" class="btn btn-primary">Save Preferences</button>
    </form>
</div>
