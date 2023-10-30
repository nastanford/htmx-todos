<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-6 offset-3">
      <form action="process_add_task.php"
        method="POST">
        <div class="form-group">
          <label for="taskName">Task Name:</label>
          <input type="text"
            class="form-control"
            id="taskName"
            name="taskName"
            required>
        </div>
        <div class="form-group">
          <label for="dueDate">Due Date:</label>
          <input type="date"
            class="form-control"
            id="dueDate"
            name="dueDate">
        </div>
        <div class="form-group">
          <label for="priority">Priority:</label>
          <select class="form-control"
            id="priority"
            name="priority">
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
          </select>
        </div>
        <div class="form-group">
          <label for="notes">Notes:</label>
          <textarea class="form-control"
            id="notes"
            name="notes"
            rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="label">Label:</label>
          <input type="text"
            class="form-control"
            id="label"
            name="label">
        </div>
        <div class="form-group">
          <label for="category">Category:</label>
          <input type="text"
            class="form-control"
            id="category"
            name="category">
        </div>
        <button type="submit"
          class="btn btn-primary mt-2">Add Task</button>
      </form>
    </div>
  </div>
</div>