<form method="POST" action="{{ route('show-ticket.update', $ticket->id) }}">
@csrf
@method('PUT')
<div class="form-floating">
    <input type="text" class="title form-control" id="title" name="title"
        placeholder="title" required value="{{$ticket->title}}">
    <label for="title">عنوان المشكلة</label>
    
</div>

<div class="form-floating">
    <textarea class="summery form-control" placeholder="Leave a comment here" id="summery" name="summery" required>{{ $ticket->summary }}</textarea>
    <label for="summery">نبذة عن المشكلة</label>
</div>
<div class="form-floating">
    <textarea class="build form-control" placeholder="Leave a comment here" id="build" name="build" required>{{ $ticket->build_platform }}</textarea>
    <label for="build">مكان المشكلة</label>
</div>
<div class="form-floating">
    <textarea class="steps form-control" placeholder="Leave a comment here" id="steps" name="steps" required>{{ $ticket->steps_reproduce }}</textarea>
    <label for="steps">خطوات المشكلة</label>
</div>
<div class="result"
    style="display: flex;justify-content: flex-start;flex-direction: row;width: 100%;">
    <div class="form-floating">
        <input type="text" class="expected form-control" id="expected" name="expected"
            placeholder="text" required value="{{$ticket->expected_result}}">
        <label for="expected">النتيجة المتوقعة</label>
    </div>
    <div class="form-floating">
        <input type="text" class="actual form-control" id="actual" name="actual"
            placeholder="text" required value="{{$ticket->actual_result}}">
        <label for="actual">النتيجة الفعلية</label>
    </div>
</div>

<div class="w-50 me-1">
    <label for="input-file" style="display: flex;align-items: center;flex-direction: column; margin-top: 2rem">
        <a href="#" class="fancybox" data-fancybox="gallery">
            <img src="{{ asset('/storage/assets-ticket/' . $ticket->image) }}" id="profile-pic" class="rounded me-2" alt="..." style="width: 89%; height: 25vh;">
        </a>
    </label>
    <input type="" accept="image/jpeg, image/png, image/jpg" id="input-file" name="img" class="form-control d-none"  onchange="previewImage(this)">
</div>

<div class="form-floating">
    <input class="deprartment form-control" list="datalistOptions" id="deprartment"
        name="deprartment" placeholder="text" required value="{{$ticket->Department->name}}">
    <label for="deprartment">القسم</label>
    <datalist id="datalistOptions">
    </datalist>
</div>
<div class="form-floating">
    <div class="form-check form-switch ">
        @if($ticket->new_or_repeated == "جديد")
        <input class="reparted form-check-input" type="checkbox" id="reparted" name="reparted">
        @else
        <input class="reparted form-check-input" type="checkbox" id="reparted" name="reparted" checked>
        @endif
        <label class="form-check-label" style="margin-right: 3rem;" for="reparted">
            حدثت من قبل</label>
    </div>
</div>
<div class="form-floating">
    <textarea id="default" name="support">{{$ticket->support_documentation}}</textarea>
</div>
@if ($_POST['sever'] == 1)
    <div class="form-floating">
        <select name="severe">
            <option value="عادية">عادية</option>
            <option value="متوسطة">متوسطة</option>
            <option value="مستعجلة">مستعجلة</option>
        </select>
    </div>
    
@endif

@if ($_POST['sever'] == 1)
    <div class="form-floating">
        <select name="sat">
            <option value="يتم معالجتها">يتم معالجتها</option>
            <option value="تم حلها">تم حلها</option>
            <option value="معلقة">معلقة</option>
        </select>
    </div>
    
@endif
<div class="form-floating">
    <button type="submit" class="btn btn-secondary">حفظ</button>
</div>
</form>
<script src="{{ url('tinymce/tinymce.min.js') }}"></script>
<script src="{{ url('js-ticket/tinymce.js') }}"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<script>
    let profilePic = document.getElementById("profile-pic");
    let inputFileImage = document.getElementById("input-file");

    function previewImage(input) {
        if (input.files && input.files[0]) {
            profilePic.src = URL.createObjectURL(input.files[0]);
            let fancyboxLink = profilePic.closest('.fancybox').setAttribute('href', URL.createObjectURL(input.files[0]));
            Fancybox.bind("[data-fancybox]", {
                infinite: false
            });
        }
    }
</script>