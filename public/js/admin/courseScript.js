$(document).ready(function(){
    $('.open-edit-modal').click(function(){
        var courseid = $(this).data("course-courseid")
        var title = $(this).data("course-title");
        var nama = $(this).data("course-nama");
        var desc = $(this).data("course-desc");
        // var materials = JSON.parse($(this).data('course-materials'));
        var courseMaterials = $(this).data('course-materials');

        courseMaterials = courseMaterials.replace(/&quot;/ig,'"');
        console.log(courseMaterials);

        var parsedMaterials;
        try {
            parsedMaterials = JSON.parse(courseMaterials);
        } catch (error) {
            console.error("Error parsing JSON:", error);
            return;
        }

        console.log(courseid);
        console.log(title);
        console.log(desc);
        console.log(nama);
        console.log(parsedMaterials)

        $('#courseNameEdit').val(title);
        $('#courseDescEdit').val(desc);
        $('#speakersEdit option').each(function() {
            if ($(this).text() === nama) {
                $(this).prop('selected', true);
                return false;
            }
        });
        $('#courseImageEdit').val(parsedMaterials[0].cImage);
        for (let i = 1; i <= parsedMaterials.length; i++) {
            $('#courseWeek'+ i +"TitleEdit").val(parsedMaterials[i - 1].cmdTitle)
            $('#courseWeek'+ i +"VideoEdit").val(parsedMaterials[i - 1].cmdVideo)
            $('#courseWeek'+ i +"DescEdit").val(parsedMaterials[i - 1].cmdDesc)
        }
        $('#EditCourse').modal('show');
    });
})
