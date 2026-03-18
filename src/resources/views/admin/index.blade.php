@extends(config('comment.admin_layout'))

@section('title')
    Comments Management
@endsection

@section('content')

<style>
/* ===== Page Layout ===== */
.nc-container {
    padding: 30px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    background-color: #f4f6f9;
    min-height: 100vh;
}

/* ===== Page Title ===== */
.nc-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.nc-header h1 {
    font-size: 26px;
    font-weight: 600;
    color: #2c3e50;
}

/* ===== Stats Cards ===== */
.nc-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.nc-card {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.nc-card h3 {
    font-size: 14px;
    color: #7f8c8d;
    margin-bottom: 10px;
}

.nc-card p {
    font-size: 22px;
    font-weight: bold;
    color: #2c3e50;
}

/* ===== Table ===== */
.nc-table-wrapper {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    overflow: hidden;
}

.nc-table {
    width: 100%;
    border-collapse: collapse;
}

.nc-table thead {
    background-color: #2c3e50;
    color: #ffffff;
}

.nc-table th,
.nc-table td {
    padding: 14px 16px;
    text-align: left;
    font-size: 14px;
}

.nc-table th {
    font-weight: 500;
}

.nc-table tbody tr {
    border-bottom: 1px solid #ecf0f1;
}

.nc-table tbody tr:hover {
    background-color: #f9fbfd;
}

.nc-badge {
    padding: 6px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}

.nc-approved {
    background-color: #eafaf1;
    color: #27ae60;
}

.nc-pending {
    background-color: #fdecea;
    color: #e74c3c;
}

.nc-btn {
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 13px;
    cursor: pointer;
    border: none;
    text-decoration: none;
    display: inline-block;
}

.nc-btn-approve {
    background-color: #27ae60;
    color: #ffffff;
}

.nc-btn-delete {
    background-color: #e74c3c;
    color: #ffffff;
}

.nc-btn:hover {
    opacity: 0.85;
}
</style>

<div class="nc-container">

    <div class="nc-header">
        <h1>Comments Management</h1>
    </div>

    <div class="nc-stats">
        <div class="nc-card">
            <h3>Total Comments</h3>
            <p>{{ \Nirajan\Comment\Models\Comment::count() }}</p>
        </div>

        <div class="nc-card">
            <h3>Approved</h3>
            <p>{{ \Nirajan\Comment\Models\Comment::where('approved', 1)->count() }}</p>
        </div>

        <div class="nc-card">
            <h3>Pending</h3>
            <p>{{ \Nirajan\Comment\Models\Comment::where('approved', 0)->count() }}</p>
        </div>

        <div class="nc-card">
            <h3>Anonymous</h3>
            <p>{{ \Nirajan\Comment\Models\Comment::where('is_anonymous', 1)->count() }}</p>
        </div>
    </div>

    {{-- Table Section --}}
    <div class="nc-table-wrapper">
        <table class="nc-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Post</th>
                    <th>Status</th>
                    <th>Anonymous</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->name }}</td>
                        <td>{{ $comment->email }}</td>
                        <td>{{ Str::limit($comment->content, 50) }}</td>
                        <td>
                            @if($comment->commentable)
                                <a href="{{ comment_post_url($comment->commentable) }}" target="_blank">
                                    {{ $comment->commentable->title ?? 'View Post' }}
                                </a>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($comment->approved)
                                <span class="nc-badge nc-approved">Approved</span>
                            @else
                                <span class="nc-badge nc-pending">Pending</span>
                            @endif
                        </td>
                        <td>
                            @if($comment->is_anonymous)
                                <span class="nc-badge nc-pending">Yes</span>
                            @else
                                <span class="nc-badge nc-approved">No</span>
                            @endif
                        <td>
                            @if(!$comment->approved)
                            <form action="{{ route('admin.comments.approve', $comment->id) }}" method="POST" style="display:inline;">
                                @csrf   
                                <button class="nc-btn nc-btn-approve">Approve</button>
                            </form>
                            @endif
                            <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="nc-btn nc-btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('comment::components.pagination', ['paginator' => $comments])
    </div>

</div>

@endsection