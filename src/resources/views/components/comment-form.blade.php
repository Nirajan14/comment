<style>
/* ===== Import Fonts ===== */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');

/* ===== Compact Comment Form ===== */
.nc-comment-wrapper {
    max-width: 100%;
    margin: 20px auto;
    background: linear-gradient(145deg, #f6f9fc 0%, #edf2f9 100%);
    border-radius: 16px;
    padding: 6px;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    position: relative;
    box-shadow: 0 10px 25px -8px rgba(0, 0, 0, 0.15);
}

.nc-comment-inner {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(5px);
    border-radius: 12px;
    padding: 20px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    position: relative;
    z-index: 1;
}

/* ===== Compact Header ===== */
.nc-header {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 16px;
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(79, 70, 229, 0.1);
}

.nc-header-icon {
    width: 36px;
    height: 36px;
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 18px;
    box-shadow: 0 5px 10px -3px rgba(79, 70, 229, 0.3);
}

.nc-header-content h3 {
    margin: 0;
    font-size: 18px;
    font-weight: 700;
    background: linear-gradient(135deg, #1e293b, #334155);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.nc-header-subtitle {
    font-size: 11px;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 4px;
}

/* ===== Compact Stats ===== */
.nc-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;
    margin-bottom: 16px;
}

.nc-stat-card {
    background: white;
    padding: 10px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(226, 232, 240, 0.6);
}

.nc-stat-icon {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #4f46e5, #818cf8);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 14px;
}

.nc-stat-content h4 {
    font-size: 14px;
    font-weight: 700;
    color: #0f172a;
    margin: 0;
}

.nc-stat-content p {
    font-size: 10px;
    color: #64748b;
    margin: 0;
    line-height: 1.2;
}

/* ===== Compact Form Row ===== */
.nc-form-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;
    margin-bottom: 12px;
}

@media (max-width: 768px) {
    .nc-form-row {
        grid-template-columns: 1fr;
        gap: 8px;
    }
}

/* ===== Compact Form Groups ===== */
.nc-form-group {
    margin-bottom: 12px;
    position: relative;
}

.nc-label {
    display: flex;
    align-items: center;
    gap: 4px;
    font-size: 11px;
    margin-bottom: 4px;
    color: #334155;
    font-weight: 600;
}

.nc-label i {
    color: #4f46e5;
    font-size: 12px;
}

.nc-input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.nc-input-icon {
    position: absolute;
    left: 10px;
    color: #94a3b8;
    font-size: 12px;
    z-index: 1;
}

.nc-input,
.nc-textarea {
    width: 100%;
    padding: 8px 10px 8px 32px;
    border-radius: 10px;
    border: 1px solid #e2e8f0;
    font-size: 12px;
    transition: all 0.2s ease;
    background: white;
    color: #0f172a;
}

.nc-textarea {
    padding-left: 10px;
    min-height: 60px;
    resize: vertical;
}

.nc-input:focus,
.nc-textarea:focus {
    border-color: #4f46e5;
    outline: none;
    box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.1);
}

/* ===== Compact Character Counter ===== */
.nc-char-counter {
    position: absolute;
    bottom: -14px;
    right: 0;
    font-size: 9px;
    color: #94a3b8;
}

/* ===== Compact Anonymous Card ===== */
.nc-anonymous-card {
    background: linear-gradient(145deg, #ffffff, #f8fafc);
    border-radius: 14px;
    padding: 12px;
    margin-bottom: 16px;
    border: 1px solid #e2e8f0;
}

.nc-anonymous-header {
    display: flex;
    align-items: center;
    gap: 10px;
}

.nc-anonymous-toggle {
    position: relative;
    display: inline-block;
    width: 44px;
    height: 22px;
    flex-shrink: 0;
}

.nc-anonymous-toggle input {
    opacity: 0;
    width: 0;
    height: 0;
}

.nc-toggle-slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #cbd5e1;
    transition: .3s;
    border-radius: 22px;
}

.nc-toggle-slider:before {
    position: absolute;
    content: "\f007";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    height: 18px;
    width: 18px;
    left: 2px;
    bottom: 2px;
    background: white;
    transition: .3s;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 9px;
    color: #4f46e5;
}

input:checked + .nc-toggle-slider:before {
    transform: translateX(22px);
    content: "\f2be";
}

.nc-anonymous-title h4 {
    margin: 0;
    font-size: 13px;
    font-weight: 600;
    color: #0f172a;
}

.nc-anonymous-title p {
    margin: 2px 0 0;
    font-size: 10px;
    color: #64748b;
}

.nc-anonymous-badge {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 4px 10px;
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    color: white;
    border-radius: 20px;
    font-size: 10px;
    font-weight: 500;
    margin-top: 6px;
    opacity: 0;
    transform: translateY(-5px);
    transition: all 0.2s ease;
}

.nc-anonymous-badge.show {
    opacity: 1;
    transform: translateY(0);
}

/* ===== Compact Error ===== */
.nc-error {
    color: #dc2626;
    font-size: 10px;
    margin-top: 4px;
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 4px 8px;
    background: #fef2f2;
    border-radius: 6px;
}

/* ===== Compact Button ===== */
.nc-btn-submit {
    width: 100%;
    padding: 10px 16px;
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    color: white;
    border: none;
    border-radius: 12px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    box-shadow: 0 4px 10px -3px rgba(79, 70, 229, 0.3);
}

.nc-btn-submit i {
    font-size: 14px;
}

/* ===== Compact Recaptcha ===== */
.nc-recaptcha {
    margin: 12px 0;
    transform: scale(0.8);
    transform-origin: left center;
}

/* ===== Compact Privacy Notice ===== */
.nc-privacy-note {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 12px;
    padding: 6px 10px;
    background: #f1f5f9;
    border-radius: 8px;
    font-size: 10px;
    color: #475569;
}

.nc-privacy-note i {
    color: #4f46e5;
    font-size: 14px;
}

/* ===== Success Message ===== */
.nc-success-message {
    text-align: center;
    padding: 20px;
    background: #f0fdf4;
    border-radius: 16px;
}

.nc-success-message i {
    font-size: 30px;
    color: #22c55e;
    margin-bottom: 8px;
}

.nc-success-message h4 {
    margin: 0 0 4px;
    font-size: 16px;
}

.nc-success-message p {
    margin: 0;
    font-size: 12px;
}
</style>

<div class="nc-comment-wrapper">
    <div class="nc-comment-inner">
        <!-- Compact Header -->
        <div class="nc-header">
            <div class="nc-header-icon">
                <i class="fas fa-comments"></i>
            </div>
            <div class="nc-header-content">
                <h3>प्रतिक्रिया दिनुहोस</h3>
                <div class="nc-header-subtitle">
                    <i class="fas fa-users"></i>
                    <span>write your comment</span>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('comments.store') }}" id="commentForm">
            @csrf

            <input type="hidden" name="commentable_id" value="{{ $model->id }}">
            <input type="hidden" name="commentable_type" value="{{ get_class($model) }}">

            <!-- Three Column Row -->
            <div class="nc-form-row">
                <div class="nc-form-group">
                    <label class="nc-label"><i class="fas fa-user-circle"></i>Name</label>
                    <div class="nc-input-wrapper">
                        <i class="fas fa-user nc-input-icon"></i>
                        <input type="text" name="name" class="nc-input" placeholder="Full name" id="nameInput" required>
                    </div>
                </div>

                <div class="nc-form-group">
                    <label class="nc-label"><i class="fas fa-envelope"></i>Email</label>
                    <div class="nc-input-wrapper">
                        <i class="fas fa-envelope nc-input-icon"></i>
                        <input type="email" name="email" class="nc-input" placeholder="Email" id="emailInput" required>
                    </div>
                </div>

                <div class="nc-form-group">
                    <label class="nc-label"><i class="fas fa-phone-alt"></i>Phone</label>
                    <div class="nc-input-wrapper">
                        <i class="fas fa-phone nc-input-icon"></i>
                        <input type="tel" name="phone" class="nc-input" placeholder="Phone (opt)" id="phoneInput">
                    </div>
                </div>
            </div>

            <!-- Anonymous Toggle -->
            <div class="nc-anonymous-card">
                <div class="nc-anonymous-header">
                    <label class="nc-anonymous-toggle">
                        <input type="checkbox" name="is_anonymous" value="1" id="anonymousCheckbox" onchange="toggleAnonymousFields()">
                        <span class="nc-toggle-slider"></span>
                    </label>
                    <div class="nc-anonymous-title">
                        <h4><i class="fas fa-incognito" style="color: #4f46e5;"></i> Post Anonymously</h4>
                        <p>Hide your identity</p>
                    </div>
                </div>
                <div class="nc-anonymous-badge" id="anonymousBadge">
                    <i class="fas fa-check-circle"></i>
                    <span>Anonymous mode active</span>
                </div>
            </div>

            <!-- Comment Field -->
            <div class="nc-form-group">
                <label class="nc-label"><i class="fas fa-comment-dots"></i>Comment</label>
                <textarea name="comment" class="nc-textarea" placeholder="Write your comment..." id="commentInput" maxlength="1000" required></textarea>
                <div class="nc-char-counter"><span id="charCount">0</span>/1000</div>
            </div>

            <!-- reCAPTCHA -->
            <div class="nc-recaptcha">
                <div class="g-recaptcha" data-sitekey="{{ config('comment.recaptcha_site_key') }}"></div>
            </div>

            <!-- Privacy Notice -->
            <div class="nc-privacy-note">
                <i class="fas fa-lock"></i>
                <span>Your information is secure and private</span>
            </div>

            <button type="submit" class="nc-btn-submit" id="submitBtn">
                <span>Post Comment</span>
                <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>
</div>

<!-- Scripts -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
// Character counter
const commentInput = document.getElementById('commentInput');
const charCount = document.getElementById('charCount');
if (commentInput) {
    commentInput.addEventListener('input', function() {
        charCount.textContent = this.value.length;
    });
}

// Anonymous toggle
function toggleAnonymousFields() {
    const anonymousCheckbox = document.getElementById('anonymousCheckbox');
    const nameInput = document.getElementById('nameInput');
    const emailInput = document.getElementById('emailInput');
    const phoneInput = document.getElementById('phoneInput');
    const anonymousBadge = document.getElementById('anonymousBadge');
    
    if (anonymousCheckbox.checked) {
        nameInput.value = 'Anonymous User';
        emailInput.value = 'anonymous@guest.com';
        phoneInput.value = '';
        nameInput.disabled = true;
        emailInput.disabled = true;
        phoneInput.disabled = true;
        nameInput.required = false;
        emailInput.required = false;
        anonymousBadge.classList.add('show');
    } else {
        nameInput.value = '';
        emailInput.value = '';
        phoneInput.value = '';
        nameInput.disabled = false;
        emailInput.disabled = false;
        phoneInput.disabled = false;
        nameInput.required = true;
        emailInput.required = true;
        anonymousBadge.classList.remove('show');
    }
}

// Form submission
document.getElementById('commentForm').addEventListener('submit', function(e) {
    const submitBtn = document.getElementById('submitBtn');
    submitBtn.innerHTML = `<span>Posting...</span><span class="nc-loading"></span>`;
    submitBtn.disabled = true;
});
</script>