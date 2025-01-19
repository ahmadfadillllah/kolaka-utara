@include('dashboard.layout.head', ['title' => 'Event'])
@include('dashboard.layout.sidebar')
@include('dashboard.layout.header')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap');

@media print {
	body {
		margin: 0 !important;
	}
}

.main-container {
	font-family: 'Lato';
	width: fit-content;
	margin-left: auto;
	margin-right: auto;
}

.ck-content {
	font-family: 'Lato';
	line-height: 1.6;
	word-break: break-word;
}

.editor-container_classic-editor .editor-container__editor {
	min-width: 795px;
	max-width: 795px;
}

.editor_container__word-count .ck-word-count {
	color: var(--ck-color-text);
	display: flex;
	height: 20px;
	gap: var(--ck-spacing-small);
	justify-content: flex-end;
	font-size: var(--ck-font-size-base);
	line-height: var(--ck-line-height-base);
	font-family: var(--ck-font-face);
	padding: var(--ck-spacing-small) var(--ck-spacing-standard);
}

.editor-container_include-word-count.editor-container_classic-editor .editor_container__word-count {
	border: 1px solid var(--ck-color-base-border);
	border-radius: var(--ck-border-radius);
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	border-top: none;
}

.editor-container_include-word-count.editor-container_classic-editor .editor-container__editor .ck-editor .ck-editor__editable {
	border-radius: 0;
}

</style>
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pr-3">Dashboard</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Event</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-12 col-lg-9 mx-auto">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Tambah Event</h4>
                            </div>
                            <hr/>
                            <div class="form-body">
                                <form action="{{ route('event.post') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <select class="single-select" name="kategori_event_uuid" required>
                                                <option selected readonly>Pilih kategori</option>
                                                @foreach ($kategori as $ka)
                                                    <option value="{{ $ka->uuid }}">{{ $ka->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tags</label>
                                        <div class="col-sm-10">
                                            <select class="multiple-select" data-placeholder="Choose anything" multiple="multiple" name="tags[]" required>
                                                @foreach ($tags as $ta)
                                                    <option value="{{ $ta->nama }}">{{ $ta->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Sampul</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <script>
                                                tinymce.init({
                                                  selector: 'textarea',
                                                  plugins: [
                                                    // Core editing features
                                                    'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
                                                    // Your account includes a free trial of TinyMCE premium features
                                                    // Try the most popular premium features until Feb 2, 2025:
                                                    'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
                                                  ],
                                                  toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                                  tinycomments_mode: 'embedded',
                                                  tinycomments_author: 'Author name',
                                                  mergetags_list: [
                                                    { value: 'First.Name', title: 'First Name' },
                                                    { value: 'Email', title: 'Email' },
                                                  ],
                                                  ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
                                                });
                                              </script>
                                              <textarea name="deskripsi">
                                                
                                              </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-light px-4">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@include('dashboard.layout.footer')

