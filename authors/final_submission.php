<?php
 $title = "Final Submission Instructions [SIGCSE 2014]";
 $nav_menu = "authors";
 include("../parts/top.php");
?>

<li><a href="#instructions"><i class="icon-chevron-right"></i> Final Submission Instructions</a></li>
<li><a href="#verification"><i class="icon-chevron-right"></i> Database Information Verification</a></li>
<li><a href="#acm"><i class="icon-chevron-right"></i> ACM Author-Izer</a></li>
<li><a href="#preparation"><i class="icon-chevron-right"></i> Preparation of Final Copy</a></li>
<li><a href="#submission"><i class="icon-chevron-right"></i> Submission of Final Copy</a></li>
<li><a href="#questions"><i class="icon-chevron-right"></i> Questions?</a></li>

<?php 
  include("../parts/middle.php"); 
?>

<div class="row-fluid">
 <div class="span12" style="text-align: center;" id="instructions">
   <h1 class="section">Final Submission Instructions</h1>            
<p><span class="label label-important">NOTICE TO ALL ACCEPTED AUTHORS:</span> Several activities must be performed to ensure that your work is correctly represented in the conference program and proceedings. Please read this entire page and follow all instructions carefully. Submissions that do not conform to the expected standards, specifications, and formats will be returned to the author for corrections and/or alterations.
<span class="label label-important">Submissions that fail to meet the expected standards, specifications, and formats by the deadline will not be published.</span></p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="verification"><h2 class="section">Database Information Verification</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>Verification deadline: <span class="label label-important"><? echo $mainUpdatesDeadline; ?></span></p>
<ul>
 <li>Double-check the information about your submission that is recorded in the SIGCSE 2012 database. Some authors may make title changes based on reviewers' 
 comments or instructions received from the Program Committee.  Please make modifications to the <strong>final</strong> title and author list 
 <strong>immediately</strong> in the online database. <span class="label label-important">THIS MODIFICATION IS URGENT</span> -- the information 
 is needed to prepare the Online Program.
 <p style="font-size: 1.0em">To check and/or update your Title and Author(s) listing in the SIGCSE database, use your submission ID number and 
 password assigned to your submission by accessing the 
	<?php if ($submissionReady) {
	 echo $verificationLink;
	} else {
	 echo "<em>author page</em>";
	}
	?>	
	for Submitting Materials and Updating Proposer Information</a> and proceed to the section entitled <strong>Edit Submission</strong>.</p>
 <p>Next:</p>
 <ul>
  <li>Select among panel, paper, special session or workshop</li>
  <li>Enter your submission ID and password</li>
  <li>Click on the button for Verify / Update</li>
 </ul>
</li>
</ul>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="acm"><h2 class="section">ACM Author-Izer</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>ACM is introducing the <a href="http://www.acm.org/publications/acm-author-izer-service">ACM Author-Izer</a>, a unique service that enables ACM authors to post links on either their own web page or institutional repository for visitors to download the definitive version of their articles from the ACM Digital Library at no charge.  ACM Author-Izer also allows the dynamic display of download and citation statistics for each “authorized” article on the author’s personal page. By linking the author’s personal bibliography with the ACM Digital Library, downloads from the author’s site are captured in official ACM statistics, more accurately reflecting total usage. ACM Author-Izer also expands ACM’s reputation as an innovative “Green Path” publisher.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="preparation"><h2 class="section">Preparation of Final Copy</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<ol>
 <li><strong>Verify Conformance to All Formatting Guidelines:</strong>
                   <p style="font-size: 1.0em">
                   <strong>SIGCSE Guidelines</strong> -
                   Double-check that your submission adheres to the
                   <a href="format.php">SIGCSE 2014 Format Instructions</a>
                   and includes all required sections (i.e., Abstract,
                   Categories &amp; Subject Descriptors, General Terms,
                   and Keywords).  These are the same guidelines published
                   when you submitted your paper/panel/special session,
                   so hopefully you should not have to make any significant
                   modifications.  We encourage authors to use the
                   <a href="http://www.acm.org/sigs/pubs/proceed/template.html">templates available on ACM's website</a>.
                   LaTeX users should use 
                   <a href="http://sheridanprinting.com/typedept/sig-alternate.cls">sig-alternate.cls</a>
                   for papers and
                   <a href="http://sheridanprinting.com/typedept/sig-alt-release.cls">sig-alt-release.cls</a>
                   for panels and special sessions.
                   </p>

<p><b>New ACM Reference guidelines.</b>
<br/>Elements (in most cases):

<ol>
<li>Author(s)</li>
<li>Year of publication</li>
<li>Title of 'document' - use initial caps on keywords and end in period.</li>
<li>Name of Site in italics if given, and followed by period.</li>
<li>Date accessed - Use 'Retrieved' followed by date as Month, DD, YYYY followed by 'from'</li>
<li>Address - Given as '{http|ftp|telnet}://path' and underlined.</li>
</ol>
</p>

<p>Note: a web address should never be given for a formally published document whose citation is complete or for which there is a DOI. Only give a web address for informal works or online-only works or resources that cannot otherwise be found by citation and/or DOI. Author Home page URLs or Institutional Repository URLs are not the way to cite formally published literature. If citing a formally published online-only publication, use the format for that genre and add elements 5 and 6 above.</p>

<p><b>Examples:</b><br/>
<code>
H. Thornburg. 2001.  Introduction to Bayesian Statistics. Retrieved March 2, 2005 from http://ccrma.stanford.edu/~jos/bayes/bayes.html
</code><br/>&nbsp;<br/>

<code>
Rafal Ablamowicz and Bertfried Fauser. 2007. CLIFFORD: a Maple 11 Package for Clifford Algebra Computations, version 11. Retrieved February 28, 2008 from http://math.tntech.edu/rafal/cliff11/index.html
</code><br/>&nbsp;<br/>

<code>
Poker-Edge.Com. 2006. Stats and Analysis. Retrieved June 7, 2006 from http://www.poker-edge.com/stats.php	
</code>
</p>	         

                   <p>
                   <strong>Sheridan Publishing Guidelines</strong> -
                   Your final submission must also conform to the formatting rules on the <a href="http://www.sheridanprinting.com/typedept/sigcse.htm">publisher's page</a>.
                   <!--Your final submission must also conform to items
                   B through F of the Formatting Notes to All Authors
                   on the
                   <a href="http://www.sheridanprinting.com/typedept/sigcse.htm">publisher's page</a>.--> 
                   </p>

                   </li>

              <li> <strong>Insert copyright statement:</strong>

                   <p>
                   All papers, panels, and special sessions submissions
                   must have a copyright or permission release statement
                   inserted in the lower left of the first column.
                   </p>

                   <p>
                   <strong>Papers</strong> -
                   The publisher's page <a href="http://www.sheridanprinting.com/typedept/sigcse.htm#insertCopyright">publisher's web page for papers</a>
                   provides instructions on how to add the appropriate
                   notice for papers.
                   </p>

                   <p>
                   <strong>Panels &amp; Special Sessions</strong> -
                   The publisher's page <a href="http://www.sheridanprinting.com/typedept/sigcse2.htm#insertCopyright">publisher's web page for panels and special sessions</a>
                   provides instructions on how to add the appropriate notice
                   for panels and special sessions.
                   </p>

                   </li>
            </ol>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="submission"><h2 class="section">Submission of Final Copy</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p><span class="label label-important"><? echo $mainCameraReadyDeadline; ?></span></p>
<p><span class="label label-important">Electronic Submissions Only!</span></p>
<p><span class="label label-important">THREE SUBMISSIONS ARE NECESSARY BY THE DEADLINE</span>
            <strong>-- one to the online database maintained by SIGCSE
            and two to the publisher.  You must also submit a signed
            copyright release form or permission form depending
            on the submission type.</strong>
            The instructions below will guide you in submitting
            the final copies to the online database and the publisher. 
            </p>

            <ol>
              <li> <strong>Complete final editing and create a PDF file
                   of your submission.  Name your files correctly.</strong>

                   <p>
                   Complete final preparation of your submission
                   according to the instructions listed
                   <a href="#prep">above</a>,
                   and then convert your paper into Adobe PDF format.
                   Be sure to retain a copy of the source document, as well.
                   Refer to our
                   <a href="creating_pdf.php">hints on creating PDF documents</a>.
                   Name all of your files using your SIGCSE submission number
                   and the lead author's last name (e.g.,
                   <tt style="font-size: 1.2em">fp309-turing.pdf</tt>, <tt style="font-size: 1.2em">fp309-turing.doc</tt>, etc.).
                   </p>

                   </li>

              <li> <strong>Submit the
                   <!-- <strong class="boldnote">final</strong> -->
                   PDF file of your submission
                   <!--(<strong class="boldnote">NOT THE ANONYMOUS VERSION</strong>) -->
                   to the SIGCSE online database.</strong>

                   <p>
                   Using the ID number and password assigned to your
                   submission for review, submit the PDF file
                   of the final copy to the SIGCSE online database
                   by accessing the
                   <?php if ($submissionReady) {
				 echo $verificationLink;
				} else {
				 echo "<em>author page</em>";
				}
				?>.
                   </p>

                   <p style="font-size: 1.0em">
                   This step is necessary because we make the submissions
                   available on-line (via links from the on-line program)
                   prior to the start of the conference and well before
                   they will be available from the ACM Digital Library.
                   </p>

                   </li>

              <li> <strong>Submit the
                   <!-- <strong class="boldnote">final</strong> -->
                   PDF and original source file(s)
                   of your submission 
                   <!-- (<strong class="boldnote">NOT THE ANONYMOUS VERSION</strong>) -->
                   to the publisher of the proceedings.</strong>

                   <p style="font-size: 1.0em">
                   The publisher is to receive (1) the PDF file
                   and (2) a copy of the actual source file(s).
                   The source file is needed to allow the publisher
                   to extract text and data to produce the metadata for the
                   <a href="http://www.acm.org/dl">ACM Digital Library</a>.
                   </p>

                   <p style="font-size: 1.0em">
                   Submit two files (<tt style="font-size: 1.2em">.doc</tt> and <tt style="font-size: 1.2em">.pdf</tt>)
                   if using Microsoft Word, or three files
                   (<tt style="font-size: 1.2em">.tex</tt>, <tt style="font-size: 1.2em">.ps</tt>, and <tt style="font-size: 1.2em">.pdf</tt>)
                   if using LaTeX to the publisher using the instructions on the publisher's website <a href="http://www.sheridanprinting.com/typedept/sigcse.htm#submission">instructions on the publisher's website</a>. 
                   Note that the publisher's website will be activated
                   for uploading final submission files by November 12.
                   You should have received one or more
                   &quot;Submission Reminder&quot; emails from the publisher
                   (from Lisa Tolles) that include a customized link
                   for easy submission of your paper.
                   Your paper identification number is in the subject
                   of this email.  Use this number if requested when
                   you enter the publisher's site, and also
                   as the first part of your filename.
                   </p>

                   </li>
              <li>

      <strong>After confirmation from the publisher, submit the signed ACM Copyright Form or Permission Form.</strong>

                   <p style="font-size: 1.0em">
                   <strong>For papers:</strong>
                   After submitting your document on the publisher's website <a href="http://www.sheridanprinting.com/typedept/sigcse.htm#C">publisher's website</a>,
                   the publisher will send the contact author a confirmation message. After your paper has been processed, you will be emailed a link to an electronic ACM Copyright Form. Fill out and submit this form. <b>Note that no links to the copyright forms have gone out yet; the electronic copyright form is still being set up.</b>
                   </p>

                   <p style="font-size: 1.0em">
                   <strong>For panels and special sessions:</strong>
                   After submitting your document on the publisher's website,
                   the publisher will send the contact author a confirmation
                   message with a link to an ACM Permission Form.
                   Print the form, fill it out, and fax the form
                   to the publisher. Fax instructions for panels
                   and special sessions are available at the publisher's web page <a href="http://www.sheridanprinting.com/typedept/sigcse2.htm#C">publisher's web page for panels and special sessions</a>.
                   </p>
                   </li>

              <li> <strong>Send email to the publications chair to indicate
                   that you have completed all of the steps above.</strong>

                   <p style="font-size: 1.0em">
                   Send email to the Publications Chair, Dennis J. Bouvier <script language="javascript">write_email( "sigcse2014-publications", "ggc.edu" );</script>, with the subject line
                   &quot;<strong><i>type IDnumber name</i></strong>&quot;,
                   where
                   </p>

                   <ul>
                     <li> <strong><i>type</i></strong> is one of
                          &quot;paper&quot;, &quot;panel&quot;, or
                          &quot;special session&quot;
                          </li>
                     <li> <strong><i>IDnumber</i></strong>
                          is the assigned submission ID number
                          </li>
                     <li> <strong><i>name</i></strong>
                          is the last name of the contact author
                          of the submission
                          </li>
                   </ul>

                   <p style="font-size: 1.0em">
                   For example, the subject line
                   &quot;<strong>paper 309 Turing</strong>&quot;
                   indicates that contact author Turing has completed
                   the submission procedures for a paper
                   with the submission ID number 309.
                   </p>

                   <p style="font-size: 1.0em">
                   This email will inform the Publications Chair, Dennis J. Bouvier <script language="javascript">write_email( "sigcse2014-publications", "ggc.edu" );</script>,
                   that:
                   </p>

                   <ul>
                     <li> Your final copy has been updated
                          in the SIGCSE online database
                          </li>
                     <li> You have submitted both PDF and source file(s)
                          to the publisher
                          </li>
                     <li> You have faxed the signed copyright
                          or permission form to the publisher
                          </li>
                   </ul>

                   </li>
            </ol>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="questions"><h2 class="section">Questions?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">

<p>If you have questions, please contact:<br />
&nbsp;<br />
Dennis J. Bouvier<br/>
Southern Illinois University Edwardsville<br/>
<script>write_email("sigcse2014-publications", "ggc.edu");</script>
</p>

<?php
 include("../parts/bottom.php");
?>
