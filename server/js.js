/**
 *  Armaan Singh
 *  000794766
 *  I, Armaan Singh, student number 000794766, certify that all code submitted is my own work;
 *  that I have not copied it from any other source.  I also certify that I have not allowed my work to be copied by others.
 * 
 * This is the java script file for the student record. 
 * All the parameters of the file is being retrived of the index file with the POST method.
 * 
 */
 
window.addEventListener("load", function () {

    /**
     * 
     * Here, the success function is called after the ajax request is launched.
     * In return it will give JSON encoded array of the students.
     * @param {array} students 
     */

    function success(students) {
        let demo = document.getElementById("demo");
        console.log(students);
        demo.innerHTML = null;
        for (let i = 0; i < students.length; i++) {
            demo.innerHTML += "<br>" + "  ("  + students[i].fullName + " " + students[i].grade + ")  ";
        }

    }

    let add = document.getElementById("add");
    add.addEventListener("click", function () {
        let student = document.getElementById("student").value;
        let grade = document.getElementById("grade").value;

        let params = "Student=" + student + "&grade=" + grade;

        console.log(student);
        //Fetch addStudent.php with post method.
        fetch("addStudent.php", {
                method: 'POST',
                credentials: 'include',
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: params
            })
            // Gets the response back in json
            .then(response => response.json())
            .then(success)
    });
});