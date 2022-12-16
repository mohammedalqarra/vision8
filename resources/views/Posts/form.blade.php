            <div class="mb-3">
                <label class="mb-3">title</label>
                <input type="text" name="title" id="title" placeholder="title" class="form-control"
                    value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label class="mb-3">Image</label>
                <input type="file" name="image" class="form-control">
                @if ($post->image)
                    <img width="80px" src="{{ asset('uploads/Posts/' . $post->image) }}" alt="">
                @endif
            </div>
            <div class="mb-3">
                <label class="mb-3">content</label>
                <textarea name="content" class="form-control" id="mytextarea" placeholder="content" rows="5">{{ $post->content }}</textarea>
            </div>
