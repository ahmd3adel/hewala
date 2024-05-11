@extends('admin.app')

@section('content')
    <div class="table-responsive">
        <div class="mb-3">
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control" placeholder="ابحث عن مستخدم..." aria-label="ابحث عن مستخدم..." oninput="searchTable()">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary text-light"><i class="fas fa-search"></i></span>
                </div>
            </div>
        </div>
        <a href="{{route('users.create')}}" class="btn btn-primary">إنشاء مستخدم جديد</a>
        <table id="userTable" class="table table-striped table-bordered mt-3">
            <thead>
            <tr>
                <th>#</th>
                <th>اسم المستخدم</th>
                <th>البريد الإلكتروني</th>
                <th>الدور</th>
                <th>العنوان</th>
                <th>الإجراءات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->address}}</td>
                    <td>
                        <a href="{{route('users.show' , $user->id)}}" class="btn btn-sm btn-primary">عرض</a>
                        <button type="button" class="btn btn-sm btn-info">تعديل</button>
                        <button type="button" class="btn btn-sm btn-danger">حذف</button>
                    </td>
                </tr>
            @endforeach

            <!-- Add more rows as needed -->
            </tbody>
        </table>
        <div id="noResults" style="display: none;">
            <p>لا توجد نتائج للبحث.</p>
        </div>
    </div>

    <script>
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue, found;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("userTable");
            tr = table.getElementsByTagName("tr");
            found = false;
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Change index to match the column you want to filter
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        found = true;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
            if (!found) {
                document.getElementById("noResults").style.display = "block";
            } else {
                document.getElementById("noResults").style.display = "none";
            }
        }
    </script>
@endsection
