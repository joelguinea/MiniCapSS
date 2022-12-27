<div>
    <h1 class="mt-3 text-center text-white">Dashboard</h1>
    <div class="content">
            <div class="row mt-5 text-center">
                <div class="col mb-2">
                    
                        <a href="/recentPost" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col mt-4">
                                        <span class="text-danger float-right" id="text">Recent Post</span>
                                        <span class="text-danger" id="text2">{{ $allPosts }}</span>
                                    </div>
                                    <div class="col">
                                        <i class="fa fa-history text-danger mt-5" id="dash-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    
                </div>
                <div class="col mb-2">
                        <a href="/logs" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col mt-4">
                                        <span class="text-danger float-right" id="text">Total Logs</span><br>
                                        <span class="text-danger" id="text2">{{ $logs }}</span>
                                    </div>
                                    <div class="col">
                                        <i class="fa fa-book text-danger mt-5" id="dash-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>
                <div class="col mb-2">

                        <a href="/myPost" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col mt-4">
                                        <span class="text-danger float-right" id="text">Your Posts</span><br>
                                        <span class="text-danger" id="text2">{{ $posts }}</span>
                                    </div>
                                    <div class="col">
                                        <i class="fa fa-thumbs-o-up text-danger mt-5" id="dash-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>
                <div class="col mb-2">
                        <a href="/admin/users" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col mt-4">
                                        <span class="text-danger float-right" id="text">Total Users</span><br>
                                        <span class="text-danger" id="text2">{{ $users }}</span>
                                    </div>
                                    <div class="col">
                                        <i class="fa fa-users text-danger mt-5" id="dash-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .card {
        width: 200px;
    
    }
    .card:hover {
        transform: scale(1.02);
        transition: transform 0.1s ease;
    }
    .card-body {
        background-color:rgba(41,41,41);
        height: 110px;
    }
    .card-body:hover {
        background-color:rgba(255,163,26);
        color: black;
    }
    a{
        text-decoration: none;
    }
    
</style>