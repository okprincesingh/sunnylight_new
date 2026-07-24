
  <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4cc9f0;
            --border-radius: 12px;
            --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

     .modal-content {
    border-radius: var(--border-radius);
    border: none;
    box-shadow: var(--box-shadow);
    background: linear-gradient(135deg, #ffffff 0%, #f1f5ff 100%);
}



        
        .modal-header {
            border-bottom: none;
            padding: 20px 25px 10px 25px;
        }
        
        .modal-title {
            font-weight: 600;
            font-size: 1.4rem;
            margin: auto;
            
        }
        
        .btn-close {
            opacity: 0.7;
        }
        
        .modal-body {
            padding: 20px 25px;
        }
        
        .form-label {
            font-weight: 500;
            margin-bottom: 6px;
            color: #212529;
        }
        
        .form-control, .form-select {
            border-radius: 8px;
            padding: 12px 15px;
            /* border: 1px solid #dee2e6; */
            /* transition: var(--transition); */
        }
        
        .form-control:focus, .form-select:focus {
            /* border-color: var(--accent-color); */
            /* box-shadow: 0 0 0 0.2rem rgba(67, 97, 238, 0.15); */
        }
        
        .btn-submit {
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            background: #28a745;
            color: white;
            border: none;
            width: 100%;
            font-size: 1.05rem;
        }
        
        .btn-submit:hover {
            background: #218838;
        }
  </style>


<!-- Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title text-center">REQUEST A QUOTE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="get-a-quote-mail.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="name" placeholder="Your full name" required>
          </div>

          <div class="mb-3">
            <label for="emailAddress" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="emailAddress" name="email" placeholder="Your email" required>
          </div>

          <div class="mb-3">
            <label for="serviceNeeded" class="form-label">Service Needed</label>
            <select class="form-select" id="serviceNeeded" name="serviceNeeded" required>
              <option selected>Select a service</option>
              <option value="Outdoor Lights">Outdoor Lights</option>
              <option value="Indoor Lights">Indoor Lights</option>
              <option value="Profile Lights">Profile Lights</option>
              <option value="Flexi Lights">Flexi Lights</option>
              <option value="LED Drivers">LED Drivers</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="projectDetails" class="form-label">Message</label>
            <textarea class="form-control" id="projectDetails" name="message" rows="4" placeholder="Message..." required></textarea>
          </div>

          <button type="submit" class="btn-submit">Submit Request</button>
        </form>
      </div>

    </div>
  </div>
</div>


