<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Program</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-mattBlackLight">
    <button class="navbar-toggler sideMenuToggler" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">Survey Program</a>
</nav>
<div class="wrapper d-flex">
    <div class="sideMenu bg-mattBlackLight">
        <div class="sidebar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link px-2 sideMenuToggler">
                        <i class="material-icons icon">view_list</i>
                        <span class="text">Hide</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link px-2">
                        <i class="material-icons icon">dashboard</i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="content">
        <main>
            <div class="container-fluid">
                <div class="container-fluid tableContainer bg-mattBlackLight my-3">
                    <div class="row">
                        <div class="col-md-4 my-3"></div>
                        <div class="col-md-4">
                            <header class="form-header">
                                <p class="text-center">OJT Performance<br>Evaluation Form</p>
                            </header>
                        </div>
                        <div class="col-md-4 my-3">
                            <div class="form-group row">
                                <label for="document_no" class="col-sm-6 col-form-label col-form-label-sm text-right">Document No. :</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-sm shadow-none" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="effective_date" class="col-sm-6 col-form-label col-form-label-sm text-right">Effective Date :</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control form-control-sm shadow-none" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="trainee_name" class="col-sm-4 col-form-label col-form-label-sm text-right">Name of Trainee :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm shadow-none" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="company_name" class="col-sm-4 col-form-label col-form-label-sm text-right">Company Name :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm shadow-none" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="department" class="col-sm-4 col-form-label col-form-label-sm text-right">Assigned Department :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm shadow-none" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="training_date" class="col-sm-4 col-form-label col-form-label-sm text-right">Training Date :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm shadow-none" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total_hours" class="col-sm-4 col-form-label col-form-label-sm text-right">Total Number of Hours :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm shadow-none" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="evaluator_name" class="col-sm-4 col-form-label col-form-label-sm text-right">Name of Evaluator :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm shadow-none" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 my-3"></div>
                        <div class="col-md-8 my-3">
                            <p class="text-justify font-italic"><span class="font-weight-bold">Direction :</span> This form aims to evaluate the performance of the Trainee in the company in a fair and honest way. Three domains are listed below with specific items in each domain. Please rate the above Trainee’s performance using the Rating Scale below.</p>
                            <header class="scale-header">
                                <p class="mb-1">Rating Scale :</p>
                            </header>
                            <table class="table table-sm table-bordered" width="100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>Rating</th>
                                        <th>Criteria</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td class="col-1">5</td>
                                        <td class="col-2">Excellent</td>
                                        <td class="col-9">Shows a high level of performance consistently. Has the ability to mentor or supervise others.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Very Good</td>
                                        <td>Shows a high level of performance frequently. Entails a minimum amount of supervision.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Good</td>
                                        <td>Shows suitable level of competence expected for a trainee. Needs regular supervision.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Fair</td>
                                        <td>Shows suitable level of competence. Needs frequent supervision and feedbacks.</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Poor</td>
                                        <td>Shows unsuitable level of competence. Needed remediation.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2 my-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 my-3"></div>
                        <div class="col-md-10 my-3">
                            <header class="scale-header">
                                <p class="mb-1">Part A :</p>
                            </header>
                            <table class="table table-bordered" width="100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>Part A - Technical Skills</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-11">A1. Programming Languages</td>
                                        <td class="col-1 text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A2. Common Operating Systems</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A3. Software Proficiency</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A4. Technical Writing</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A5. Project Management</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A6. Data Analysis</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A7. Application Development</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-weight-bold">AVERAGE SCORE : </span>(A1+A2+A3+A4+A5+A6+A7)/7</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div>
                                                <label for="comment" class="form-label">Comments/Suggestions:</label>
                                                <textarea class="form-control shadow-none" rows="3"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-1 my-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 my-3"></div>
                        <div class="col-md-10 my-3">
                            <header class="scale-header">
                                <p class="mb-1">Part B :</p>
                            </header>
                            <table class="table table-bordered" width="100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>Part B - Professional Skills</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-11">B1. Communication: The Trainee effectively delivers applicable and appropriate oral written ideas, opinion, and information.</td>
                                        <td class="col-1 text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B2. Quantity of Work: The Trainee completed the given volume of tasks and assignment at a given time.</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B3. Quality of Work: The Trainee’s works meet the needed requirements, standards, and accuracy of the finished tasks.</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B4. Knowledge and Skills: The Trainee demonstrates understanding of the job and other related errands with skills required.</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B5. Decision: The Trainee shows suitable judgment towards the situation under pressure.</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B6. Problem-solving Skills: The Trainee exhibits the ability to identify, analyze, and solve problems indicating his/her critical thinking skills.</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-weight-bold">AVERAGE SCORE : </span>(B1+B2+B3+B4+B5+B6)/6</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div>
                                                <label for="comment" class="form-label">Comments/Suggestions:</label>
                                                <textarea class="form-control shadow-none" rows="3"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-1 my-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 my-3"></div>
                        <div class="col-md-10 my-3">
                            <header class="scale-header">
                                <p class="mb-1">Part C :</p>
                            </header>
                            <table class="table table-bordered" width="100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>Part C - Personality</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-11">C1. Attentiveness: The Trainee demonstrates persistence and diligence on his/her job performance.</td>
                                        <td class="col-1 text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C2. Eagerness: The Trainee shows willingness to learn and gain new knowledge.</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C3. Independent: The Trainee demonstrates his/her ability to complete a job according to procedures, instructions, and set time limits with minimum supervisions.</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C4. Resourcefulness: The Trainee shows initiative without the need of encouragement from his/her Superior and demonstrates full determination to meet work situation.</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C5. Collaboration: The Trainee demonstrates teamwork among his/her co-trainees, superiors, and company employees for the achievement of common goal.</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C6. Adaptability: The Trainee deals with great flexibility as he/she is assigns to any department and was given any tasks.</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C7. Punctuality: The Trainee always report on time and avoid frequent absenteeism.</td>
                                        <td class="text-center">
                                            <select class="form-select form-select-sm shadow-none">
                                                <option selected></option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-weight-bold">AVERAGE SCORE : </span>(C1+C2+C3+C4+C5+C6+C7)/7</td>
                                        <td class="text-center">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div>
                                                <label for="comment" class="form-label">Comments/Suggestions:</label>
                                                <textarea class="form-control shadow-none" rows="3"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-weight:bold;">OVERALL PERFORMANCE : </span>(A+B+C)/3</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-1 my-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 my-3"></div>
                        <div class="col-md-10 my-3">
                            <table class="table table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>COMMENTS AND RECOMMENDATIONS :</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <label for="recommendation" class="form-label">1.	What do you think is the best asset of the Trainee that will aid him/her to get a position in the company?</label>
                                                <textarea class="form-control shadow-none" rows="3"></textarea>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <label for="recommendation" class="form-label">2.	What does the trainee’s weakness that needed to improve?</label>
                                                <textarea class="form-control shadow-none" rows="3"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <label for="recommendation" class="form-label">3.	Which department of the company do you think the trainee is suitable?</label>
                                                <textarea class="form-control shadow-none" rows="3"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <label for="recommendation" class="form-label">4.	Other Comments and Recommendations:</label>
                                                <textarea class="form-control shadow-none" rows="3"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-1 my-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 my-3"></div>
                        <div class="col-md-10 mb-3">
                            <button type="submit" class="btn save btn-primary btn-lg shadow-none" name="submit">Save</button>
                        </div>
                        <div class="col-md-1 my-3"></div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
<script src="script.js"></script>
</body>
</html>