<!-- Signup modal content -->
<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form class="px-3" method="post" action="{{ route('category.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Category Name</label>
                        <input class="form-control" type="text" name="category_name" placeholder="Add Category ">
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
