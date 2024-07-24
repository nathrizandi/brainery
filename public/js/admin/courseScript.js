$(document).ready(function(){
    $('.open-edit-modal').click(function(){
        var course_id = $(this).data("course-courseid");
        console.log(course_id);

        var title = $(this).data("course-title");
        var nama = $(this).data("course-nama");
        var desc = $(this).data("course-desc");
        var courseMaterials = $(this).data('course-materials');

        courseMaterials = courseMaterials.replace(/&quot;/ig,'"');

        var parsedMaterials;
        try {
            parsedMaterials = JSON.parse(courseMaterials);
        } catch (error) {
            console.error("Error parsing JSON:", error);
            return;
        }

        // console.log(courseid);
        // console.log(title);
        // console.log(desc);
        // console.log(nama);
        // var cm_id1 = parsedMaterials[0].courseMaterial_id
        // var cm_id2 = parsedMaterials[1].courseMaterial_id
        // var cm_id3 = parsedMaterials[2].courseMaterial_id
        // var cm_id4 = parsedMaterials[3].courseMaterial_id

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
            $('#courseWeek'+ i +"Id").val(parsedMaterials[i - 1].cmdId)
            console.log(parsedMaterials[i - 1].cmdId)
            $('#courseWeek'+ i +"TitleEdit").val(parsedMaterials[i - 1].cmdTitle)
            $('#courseWeek'+ i +"VideoEdit").val(parsedMaterials[i - 1].cmdVideo)
            $('#courseWeek'+ i +"DescEdit").val(parsedMaterials[i - 1].cmdDesc)
        }

        $('#EditCourse').modal('show');

        $('#editCourseForm').off('submit').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            this.action = '/admin/course/edit-course/' + course_id; // Adjust this URL structure as per your route
            this.action =
            this.submit();
        });
    });
})
