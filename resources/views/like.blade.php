thay course 
// Ở database thêm bảng like 
// vào bảng like viết 
public function up()
{
    Schema::create('likes', function(Blueprint $table)
    {
        $table->increments('id');
        $table->integer('course_id');//// Id khóa học
        $table->integer('user_id');
        $table->softDeletes();
        $table->timestamps();
    });
}
/// mở model và tìm User thêm ràng buộc 
public function like(){
        return $this->hasMany('App\Like','user_id','id');
    }
/// mở model và tìm Course.php thêm ràng buộc
public function like(){
        return $this->hasMany('App\Like','course_id','id');
    }
///Vào controller 

publiic function postlike(Request $req){
	$like = new Like;
	$like->user_id = $req->user_id;
	$like->course_id = $req->course_id;
	$course = Course::find('course_id');
	$course->count_like = $course->count_like +1;
	$like->save();
	$course->save();
	return back();
}  
/// thêm route
/// thêm vào trang tại vị trí  nút like
<form method="POST" id="post_up" action="">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="post"  value="{{ $post->id }}" />
    <input type="hidden" name="user"  value="{{ Auth::user()->id }}" />
    <button type="submit" class="btn btn-default" aria-label="Left Align">
        <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
    </button>
</form>


