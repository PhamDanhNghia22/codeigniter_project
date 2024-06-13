<div class="container-fluid">

<div class="form-edit card w-100">
<div class="card-body">
<h5 class="card-title fw-semibold mb-4">Thêm thể loại</h5>
        <form action="<?=base_url('Admin/category/insert')?>" method="POST">
            <div class="my-3">
                <label  class="form-label">Tên danh mục</label>
                <input type="text" class="form-control" name="tendm" value="">
            </div>
            <div class="my-3">
                <label  class="form-label">Mô tả danh mục</label>
                <textarea name="motadm" id="motadm" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="my-3 ">
                <label  class="form-label">Trạng thái</label>
                <select name="trangthai_dm" id="trangthai_dm" class="form-select">
                    <option value="0">Hiện</option>
                    <option value="1">Ẩn</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success my-3">Thêm</button>
        </form>
</div>
</div>
</div>
