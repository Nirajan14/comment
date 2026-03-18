<style>
/* ===== Compact Comments List ===== */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');

.nc-comments-wrapper {
    max-width: 100%;
    margin: 20px auto;
    background: linear-gradient(145deg, #f8fafc, #f1f5f9);
    border-radius: 16px;
    padding: 12px;
    font-family: 'Inter', sans-serif;
}

/* ===== Compact Header ===== */
.nc-comments-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 16px;
    padding-bottom: 12px;
    border-bottom: 1px solid rgba(79,70,229,0.1);
}

.nc-comments-title {
    display: flex;
    align-items: center;
    gap: 8px;
}

.nc-comment-count {
    background: linear-gradient(135deg,#4f46e5,#7c3aed);
    color: #fff;
    padding: 4px 10px;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 4px;
}

.nc-comment-count i {
    font-size: 11px;
}

/* ===== Compact Comment Card ===== */
.nc-comment-card {
    display: flex;
    gap: 10px;
    padding: 12px;
    background: #fff;
    border-radius: 12px;
    margin-bottom: 8px;
    border: 1px solid #e2e8f0;
    transition: all 0.2s ease;
    position: relative;
}

.nc-comment-card::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 3px;
    background: linear-gradient(135deg,#4f46e5,#7c3aed);
    opacity: 0;
    transition: 0.2s;
    border-radius: 3px 0 0 3px;
}

.nc-comment-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 15px rgba(0,0,0,0.05);
}

.nc-comment-card:hover::before {
    opacity: 1;
}

/* ===== Compact Avatar ===== */
.nc-avatar {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: linear-gradient(135deg,#4f46e5,#7c3aed);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 14px;
    flex-shrink: 0;
}

.nc-avatar.anonymous {
    background: linear-gradient(135deg,#64748b,#475569);
}

.nc-avatar i {
    font-size: 14px;
}

/* ===== Compact Content ===== */
.nc-comment-content {
    flex: 1;
    min-width: 0; /* Prevents overflow */
}

.nc-comment-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 4px;
    flex-wrap: wrap;
    gap: 4px;
}

.nc-comment-name {
    font-weight: 600;
    font-size: 13px;
    color: #0f172a;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 150px;
}

.nc-comment-date {
    font-size: 10px;
    color: #64748b;
    background: #f1f5f9;
    padding: 3px 8px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    gap: 3px;
    white-space: nowrap;
}

.nc-comment-date i {
    font-size: 9px;
}

/* ===== Compact Comment Text ===== */
.nc-comment-text {
    font-size: 12px;
    color: #334155;
    line-height: 1.5;
    background: #f8fafc;
    padding: 8px 10px;
    border-radius: 8px;
    border: 1px solid #e2e8f0;
    word-wrap: break-word;
}

/* ===== Compact Empty State ===== */
.nc-empty-state {
    text-align: center;
    padding: 30px 15px;
    background: #fff;
    border-radius: 16px;
    border: 2px dashed #cbd5e1;
}

.nc-empty-state i {
    font-size: 35px;
    color: #94a3b8;
    margin-bottom: 10px;
}

.nc-empty-state h4 {
    margin: 0 0 5px;
    font-size: 16px;
    color: #334155;
}

.nc-empty-state p {
    margin: 0;
    font-size: 12px;
    color: #64748b;
}

/* ===== Compact Filters ===== */
.nc-filters {
    display: flex;
    gap: 6px;
    margin-bottom: 15px;
    flex-wrap: wrap;
}

.nc-filter-btn {
    padding: 4px 10px;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    background: white;
    font-size: 11px;
    color: #64748b;
    cursor: pointer;
    transition: all 0.2s;
}

.nc-filter-btn.active {
    background: #4f46e5;
    color: white;
    border-color: #4f46e5;
}

/* ===== Load More Button ===== */
.nc-load-more {
    text-align: center;
    margin-top: 15px;
}

.nc-load-more-btn {
    background: white;
    border: 1px solid #e2e8f0;
    padding: 6px 16px;
    border-radius: 30px;
    font-size: 12px;
    color: #4f46e5;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s;
}

.nc-load-more-btn:hover {
    background: #4f46e5;
    color: white;
    border-color: #4f46e5;
}

/* ===== Reply Indicators ===== */
.nc-reply-indicator {
    display: inline-flex;
    align-items: center;
    gap: 3px;
    margin-left: 8px;
    padding: 2px 6px;
    background: #f1f5f9;
    border-radius: 12px;
    font-size: 10px;
    color: #475569;
}

/* ===== Mobile Responsive ===== */
@media (max-width: 768px) {
    .nc-comments-wrapper {
        padding: 12px;
    }
    
    .nc-comment-card {
        padding: 10px;
    }
    
    .nc-comment-name {
        max-width: 120px;
        font-size: 12px;
    }
    
    .nc-comment-date {
        font-size: 9px;
        padding: 2px 6px;
    }
    
    .nc-comment-text {
        font-size: 11px;
        padding: 6px 8px;
    }
}

/* ===== With Form Integration ===== */
.nc-comments-section {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* ===== Animation ===== */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(5px); }
    to { opacity: 1; transform: translateY(0); }
}

.nc-comment-card {
    animation: fadeIn 0.3s ease;
}

/* ===== Status Badges ===== */
.nc-status-badge {
    display: inline-flex;
    align-items: center;
    gap: 3px;
    padding: 2px 6px;
    background: #e6f7e6;
    color: #15803d;
    border-radius: 12px;
    font-size: 9px;
    font-weight: 500;
    margin-left: 5px;
}

.nc-status-badge i {
    font-size: 8px;
}

/* ===== Compact Threaded View ===== */
.nc-thread-line {
    margin-left: 20px;
    padding-left: 15px;
    border-left: 2px dashed #e2e8f0;
}

.nc-reply-card {
    margin-top: 8px;
    margin-left: 25px;
    padding: 10px;
    background: #fafafa;
    border-radius: 10px;
    border-left: 3px solid #4f46e5;
}
</style>

<div class="nc-comments-wrapper">
    <!-- Compact Header -->
    <div class="nc-comments-header">
        <div class="nc-comments-title">
            <div class="nc-comment-count">
                <i class="fas fa-comments"></i>
                <span id="totalCommentsCount">{{ $model->comments->count() }}</span>
            </div>
        </div>
        
        <!-- Optional: Compact Filters -->
        <div class="nc-filters">
            <button class="nc-filter-btn active">Newest</button>
            <button class="nc-filter-btn">Oldest</button>
        </div>
    </div>

    <!-- Comments Container -->
    <div id="nc-comment-container">
        @forelse($model->comments as $comment)
            <div class="nc-comment-card" data-date="{{ $comment->created_at->timestamp }}" data-likes="0" data-replies="0">
                <!-- Compact Avatar -->
                <div class="nc-avatar {{ $comment->is_anonymous ? 'anonymous' : '' }}">
                    @if($comment->is_anonymous)
                        <i class="fa-solid fa-user-secret"></i>
                    @else
                        {{ strtoupper(substr($comment->name, 0, 1)) }}
                    @endif
                </div>

                <!-- Compact Content -->
                <div class="nc-comment-content">
                    <div class="nc-comment-header">
                        <div style="display: flex; align-items: center; gap: 4px; min-width: 0;">
                            <span class="nc-comment-name">
                                {{ $comment->is_anonymous ? 'Anonymous' : $comment->name }}
                            </span>
                        </div>
                        
                        <div class="nc-comment-date">
                            <i class="far fa-clock"></i>
                            {{ $comment->created_at->diffForHumans() }}
                        </div>
                    </div>

                    <!-- Compact Comment Text -->
                    <div class="nc-comment-text">
                        {{ $comment->content }}
                        
                        <!-- Optional: Read More for long comments -->
                        @if(strlen($comment->content) > 150)
                            <span style="color: #4f46e5; font-size: 10px; display: block; margin-top: 4px;">
                                Read more...
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <!-- Compact Empty State -->
            <div class="nc-empty-state">
                <i class="far fa-comment-dots"></i>
                <h4>No Comments Yet</h4>
                <p>Be the first to comment!</p>
            </div>
        @endforelse
    </div>
    
    <!-- Optional: Load More Button -->
    @if($model->comments->count() > 5)
    <div class="nc-load-more">
        <button class="nc-load-more-btn">
            <i class="fas fa-sync-alt"></i> Load More
        </button>
    </div>
    @endif
</div>

<!-- Optional: JavaScript for compact interactions -->
<script>
// Optional: Truncate long comments
document.querySelectorAll('.nc-comment-text').forEach(text => {
    const content = text.textContent.trim();
    if (content.length > 150) {
        const shortContent = content.substring(0, 150) + '...';
        text.innerHTML = shortContent + ' <span style="color: #4f46e5; font-size: 10px;">Read more</span>';
        
        // Add click handler for read more
        text.addEventListener('click', function(e) {
            if (e.target.tagName === 'SPAN') {
                this.textContent = content;
            }
        });
    }
});

// Optional: Filter functionality
document.querySelectorAll('.nc-filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.nc-filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        
        // Add your sorting logic here
        const filter = this.textContent.toLowerCase();
        const container = document.getElementById('nc-comment-container');
        const comments = Array.from(document.querySelectorAll('.nc-comment-card'));
        
        if (filter === 'newest') {
            comments.sort((a, b) => b.dataset.date - a.dataset.date);
        } else if (filter === 'oldest') {
            comments.sort((a, b) => a.dataset.date - b.dataset.date);
        }
        
        container.innerHTML = '';
        comments.forEach(comment => container.appendChild(comment));
    });
});
</script>