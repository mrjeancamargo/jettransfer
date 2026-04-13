
$(document).ready(function() {
	// Global Settings
	let edit = false;
  
	
	fetchTasks();

function fetchTasks() {
	$.ajax({
      url: 'https://jettransfer.ie/restApi/FQAs.php',
      type: 'GET',
      success: function(response) {
        const tasks = JSON.parse(response);
        let template = '';
        tasks.forEach(task => {
          template += `
			<tr>
				<td>${task.question}</td>
				<td>${task.answer}</td>
	  		</tr>
            `
        });
        $('#tasks').html(template);
      }
    });
}
});