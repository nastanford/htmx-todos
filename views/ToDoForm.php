<form method="POST"
  hx-post="/submit_task"
  hx-target="#ToDoForm">
  <div class="container-fluid mb-5">
    <div class="row">
      <div class="col-6 offset-3 border border-1 border-dark rounded-3 p-4">
        <div class="form-group fw-bold">
          <label for="taskName">Task Name:</label>
          <input type="text"
            class="form-control"
            id="taskName"
            name="taskName"
            required
            pattern=".*\S+.*"
            title="Task Name is required">
          <div class="text-danger"
            id="taskNameError"></div>
        </div>

        <div class="form-group fw-bold">
          <label for="dueDate">Due Date:</label>
          <input type="date"
            class="form-control"
            id="dueDate"
            name="dueDate">
        </div>
        <div class="form-group fw-bold">
          <label for="priority">Priority:</label>
          <select class="form-control"
            id="priority"
            name="priority">
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
          </select>
        </div>
        <div class="form-group fw-bold">
          <label for="notes">Notes:</label>
          <textarea class="form-control"
            id="notes"
            name="notes"
            rows="3"></textarea>
        </div>
        <div class="form-group fw-bold">
          <label for="label">Label:</label>
          <input type="text"
            class="form-control"
            id="label"
            name="label">
        </div>
        <div class="form-group fw-bold">
          <label for="category">Category:</label>
          <input type="text"
            class="form-control"
            id="category"
            name="category">
        </div>
      </div>
      <div class="col-6 offset-3 text-center">
        <button type="submit"
          class="btn btn-primary mt-2">Add Task</button>
      </div>
    </div>
  </div>
</form>