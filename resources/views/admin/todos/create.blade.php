<form class="form-validate" method="post" enctype="multipart/form-data"
                                action="{{route('todos.store')}}">
                                @include('admin.forms.todo_form')
                                <div class="form-group">
                                    <div class="box-footer">
                                        <input class="btn btn-primary pull-right" type="submit" value="Create">
                                        <input class="btn btn-danger pull-left" type="reset" value="Reset">
                                    </div>
                                </div>
                            </form>