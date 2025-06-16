<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboardPage') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Hero Section</li>
                        </ol>
                    </div>
                    <h4 class="page-title">ero Section</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Hero Section</h4>
                        <p class="card-title-category">Hero Section</p>
                    </div>
                    <div class="card-body">
                        <form id="addAttributeForm" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="addAttrName">Attribute Name</label>
                                <input type="text" class="form-control" id="addAttrName" name="attribute_name" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">INSERT ATTRIBUTE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>