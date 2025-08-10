<!-- footer -->
<footer class="py-5 footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md py-2">
                <strong>منصة نادي البرمجة التعليمية</strong>
                <div class="d-block mt-2 mb-2">تصميم وتطوير <a href="{{ route('technical-committee') }}">اللجنة التقنية</a></div>
                <small class="d-block mt-2 mb-2">نادي البرمجة</small>
                <small class="d-block mb-2">2025-2024 ©</small>
            </div>
            <div class="col-6 col-md py-2">
                <h5>روابط مهمة</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="https://cscis.nu.edu.sa/%D9%86%D8%A7%D8%AF%D9%8A-%D8%A7%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D8%A9">نادي البرمجة</a></li>
                    <li><a href="{{ route('support.create') }}">الدعم الفني</a></li>
                    <li><a href="{{ route('terms') }}">الشروط والأحكام</a></li>
                    <li><a href="{{ route('privacy') }}">سياسة الخصوصية</a></li>
                </ul>
            </div>
            <div class="col-6 col-md py-2">
                <h5>حول</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
                    <li><a href="{{ route('tracks.index') }}">المسارات</a></li>
                    <li><a href="{{ route('maps') }}">خرائط الطريق</a></li>
                    <li><a href="{{ route('programming.string') }}">البرمجة التنافسية</a></li>
                    <li><a href="{{ route('articles') }}">المقالات</a></li>
                    <li><a href="{{ route('podcast') }}">البودكاست</a></li>
                </ul>
            </div>
            <div class="col-6 col-md py-2">
                <h5>بوابة الطالب</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="{{ route('register') }}">إنشاء حساب</a></li>
                    <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>