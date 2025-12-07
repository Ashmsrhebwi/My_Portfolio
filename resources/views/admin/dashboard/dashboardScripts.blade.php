{{-- resources/views/admin/dashboard.scripts.blade.php --}}
@push('scripts')
<script>
// التحقق إذا كانت أول زيارة للصفحة في هذه الجلسة
document.addEventListener('DOMContentLoaded', function() {
    const loader = document.getElementById('loader');
    const mainContent = document.getElementById('main-content');
    
    // التحقق من localStorage إذا تمت زيارة الصفحة مسبقاً
    const hasVisited = localStorage.getItem('dashboardVisited');
    
    if (!hasVisited) {
        // أول زيارة - عرض الـ Loader
        loader.style.display = 'flex';
        mainContent.style.opacity = '0';
        
        setTimeout(function() {
            // إخفاء الـ Loader بعد 2 ثانية
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
            
            // عرض المحتوى الرئيسي
            mainContent.style.opacity = '1';
            
            // حفظ في localStorage أن المستخدم زار الصفحة
            localStorage.setItem('dashboardVisited', 'true');
            
        }, 2000);
    } else {
        // ليس أول زيارة - عرض المحتوى مباشرة
        loader.style.display = 'none';
        mainContent.style.opacity = '1';
    }
    
    // إضافة تأثيرات تفاعلية للكروت
    const cards = document.querySelectorAll('.section-card');
    
    cards.forEach((card, index) => {
        // تأخير ظهور الكروت بالتسلسل
        setTimeout(() => {
            card.style.animation = 'slideUp 0.5s ease forwards';
        }, index * 100 + 300);
        
        // جعل الكروت قابلة للنقر بالكامل
        card.classList.add('cursor-pointer');
        card.addEventListener('click', function(e) {
            if (!e.target.closest('a')) {
                const link = this.querySelector('a');
                if (link) {
                    window.location.href = link.href;
                }
            }
        });
    });
    
    // تأثير عند النقر على الأزرار
    const buttons = document.querySelectorAll('.btn-edit');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation(); // منع انتشار الحدث للكارد
        });
    });
});

// (اختياري) إعادة تعيين الـ localStorage عند تسجيل الخروج
// يمكن إضافة هذا في صفحة تسجيل الخروج
// localStorage.removeItem('dashboardVisited');
</script>
@endpush