<?php
/**
 * Template Name: Code Analyzer
 */

get_header();

$section1_title = esc_html(get_post_meta(get_the_ID(), 'section1_title', true));
$section1_content = esc_html(get_post_meta(get_the_ID(), 'section1_content', true));
$section2_title = esc_html(get_post_meta(get_the_ID(), 'section2_title', true));
$section2_content = esc_html(get_post_meta(get_the_ID(), 'section2_content', true));
$section3_title = esc_html(get_post_meta(get_the_ID(), 'section3_title', true));
$section3_content = esc_html(get_post_meta(get_the_ID(), 'section3_content', true));
$section4_content = esc_html(get_post_meta(get_the_ID(), 'section4_content', true));
$section5_title = esc_html(get_post_meta(get_the_ID(), 'section5_title', true));
$section5_item1_title = esc_html(get_post_meta(get_the_ID(), 'section5_item1_title', true));
$section5_item1_content = esc_html(get_post_meta(get_the_ID(), 'section5_item1_content', true));
$section5_item2_title = esc_html(get_post_meta(get_the_ID(), 'section5_item2_title', true));
$section5_item2_content = esc_html(get_post_meta(get_the_ID(), 'section5_item2_content', true));
$section5_item3_title = esc_html(get_post_meta(get_the_ID(), 'section5_item3_title', true));
$section5_item3_content = esc_html(get_post_meta(get_the_ID(), 'section5_item3_content', true));

?>

<style>
    .navbar_component.w-nav {
        display: none !important;
    }

    .header {
        position: sticky;
        top: 0;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.7) 50%, rgba(0, 0, 0, 0.3) 100%);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.12);
    }

    .header,
    .footer {
        padding-left: 24px;
        padding-right: 24px;
    }

    .header .content,
    .footer .content {
        max-width: 1280px;
        width: 100%;
        margin: 0 auto;
        height: 68px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .footer {
        padding-top: 160px;
        padding-bottom: 160px;
    }

    .section1,
    .section2,
    .section3,
    .section4,
    .section5,
    .section6,
    .faq {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        align-items: safe center;
        justify-content: center;
        padding: 120px 24px 60px 24px;
        gap: 32px;
        text-align: center;
        vertical-align: middle;
        text-wrap: pretty;
    }

    p {
        font-family: Overused Grotesk;
        font-weight: 400;
        font-size: 24px;
        line-height: 32px;
        letter-spacing: 0px;
        max-width: 866px;
    }

    .section1 {
        background-image: url('https://edgedelta.com/wp-content/uploads/2025/10/c1f9a00b5a726dccaba62d21c27185d9e0f4893c-scaled.png');
        background-size: cover;
    }

    h1,
    h2,
    h3,
    h4 {
        -webkit-text-fill-color: unset;
        background-clip: unset;
        background: unset;
    }

    h1 {
        font-family: Sora;
        font-weight: 600;
        font-size: 60px;
        line-height: 74px;
        letter-spacing: -0.3px;
        max-width: 950px;
    }

    h2 {
        font-family: Sora;
        font-weight: 600;
        font-size: 48px;
        line-height: 52.8px;
        letter-spacing: -1.44px;
        max-width: 800px;
    }

    h3 {
        font-family: Overused Grotesk;
        font-weight: 600;
        font-size: 28px;
        line-height: 32px;
        letter-spacing: 0%;
    }

    .section2 {
        background: rgba(0, 0, 0, 1);
        flex-direction: row;
        align-items: start;
        flex-wrap: wrap;
        gap: 94px;
        padding-bottom: 96px;
    }

    .section2_prose {
        display: flex;
        flex-direction: column;
        gap: 24px;
        max-width: 566px;
        text-align: left;
    }

    .section2 img {
        border-radius: 8px;
    }

    .section3,
    .section5 {
        background: rgba(234, 234, 234, 1);
        color: rgba(0, 0, 0, 1);
        padding-bottom: 100px;
    }

    .section3 logos {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 24px;
    }

    .section3 logos>* {
        width: 120px;
        height: 120px;
    }

    .section4 {
        background-image: url('https://edgedelta.com/wp-content/uploads/2025/10/33f2f20c0a80c020745d1d9a3582f7c46085b3e3.png');
        background-size: cover;
        padding-bottom: 100px;
    }

    .section4 p {
        font-family: Sora;
        font-weight: 600;
        font-size: 36px;
        line-height: 42px;
        letter-spacing: 0%;
    }

    .section5 .items {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-top: 40px;
    }

    .section5 .items .item {
        width: 410px;
        display: flex;
        flex-direction: column;
        text-align: left;
        border-top: 2px solid rgba(0, 0, 0, 1);
        padding-top: 12px;
        gap: 12px;
    }

    .section5 .items .item p {
        font-size: 18px;
        line-height: 24px;
    }

    .section6 {
        background: linear-gradient(90deg, #27A1FF 0%, #01DA63 100%);
        padding: 32px;
    }

    .faq {
        gap: 0;
    }

    .faq p,
    .faq h4 {
        font-family: Overused Grotesk;
        font-size: 24px;
        line-height: 32px;
        letter-spacing: 0%;
        text-align: left;
        max-width: 935px;
        width: 100%;
    }

    .faq h4 {
        font-weight: 800;
        margin: 0;
        margin-top: 24px;
    }

    .cta {
        width: 169px;
        height: 53px;
        opacity: 1;
        border-radius: 8px;
        border-width: 1px;
        background: rgba(255, 255, 255, 1);
        border-color: rgba(255, 255, 255, 1);
        border-style: solid;
        font-family: Overused Grotesk;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
        letter-spacing: 0;
        text-align: center;
        vertical-align: middle;
        align-content: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .gradient-btn.green-blue {
        width: 169px;
        text-align: center;
        align-content: center;
    }
</style>

<div class="header">
    <div class="content">
        <a href="https://edgedelta.com" aria-label="home" aria-current="page">
            <img src="https://edgedelta.com/wp-content/themes/edgedelta/assets/images/edgedeltanavlogo.svg"
                alt="Edge Delta" height="24">
        </a>

        <a href="https://app.edgedelta.com/auth/login" class="gradient-btn green-blue">Get Started</a>
    </div>
</div>

<div class="section1">
    <h1><?php echo $section1_title; ?></h1>
    <p><?php echo $section1_content; ?></p>
    <a href="https://app.edgedelta.com/auth/login" class="cta" style="color: rgba(93, 46, 140, 1)">Get Started</a>
</div>

<div class="section2">
    <div class="section2_prose">
        <h2><?php echo $section2_title; ?></h2>
        <p><?php echo $section2_content; ?></p>
    </div>

    <img src="https://edgedelta.com/wp-content/uploads/2025/10/93c87bb231a897137bd1526ccfffb89737254306.png"
        alt="Code Analyzer Teammate" height="310">
</div>

<div class="section3">
    <h2><?php echo $section3_title; ?></h2>
    <p><?php echo $section3_content; ?></p>

    <div class="logos">
        <img src="https://edgedelta.com/wp-content/uploads/2025/10/atlassian-dark.png" alt="Atlassian">
        <img src="https://edgedelta.com/wp-content/uploads/2025/10/aws-dark.png" alt="AWS">
        <img src="https://edgedelta.com/wp-content/uploads/2025/10/databricks.png" alt="Databricks">
        <img src="https://edgedelta.com/wp-content/uploads/2025/10/kubernetes-1.png" alt="GitHub">
        <img src="https://edgedelta.com/wp-content/uploads/2025/10/kubernetes.png" alt="Kubernetes">
        <img src="https://edgedelta.com/wp-content/uploads/2025/10/pagerduty.png" alt="PagerDuty">
        <img src="https://edgedelta.com/wp-content/uploads/2025/10/sentry-dark.png" alt="Sentry">
        <img src="https://edgedelta.com/wp-content/uploads/2025/10/slack.png" alt="Slack">
        <img src="https://edgedelta.com/wp-content/uploads/2025/10/teams.png" alt="Teams">
    </div>
</div>

<div class="section4">
    <p><?php echo $section4_content; ?></p>
    <a href="https://app.edgedelta.com/auth/login" class="gradient-btn green-blue" style="height: 53px">Get Started</a>
</div>

<div class="section5">
    <h2><?php echo $section5_title; ?></h2>

    <div class="items">
        <div class="item">
            <h3><?php echo $section5_item1_title; ?></h3>
            <p><?php echo $section5_item1_content; ?></p>
        </div>
        <div class="item">
            <h3><?php echo $section5_item2_title; ?></h3>
            <p><?php echo $section5_item2_content; ?></p>
        </div>
        <div class="item">
            <h3><?php echo $section5_item3_title; ?></h3>
            <p><?php echo $section5_item3_content; ?></p>
        </div>
    </div>
</div>

<div class="section6">
    <a href="https://app.edgedelta.com/auth/login" class="cta" style="color: rgba(39, 161, 255, 1)">Get Started</a>
</div>

<div class="faq">
    <h2 style="margin-bottom: 16px;">FAQ</h2>

    <h4>Which models are available, and how is pricing set?</h4>
    <p>AI Teammates are built on external models, including OpenAI GPT, Anthropic Claude, and more. You have control
        over which model a particular Teammate should use, and can always see which model is being used. Pricing is
        based on token usage and follows vendor list prices, making it transparent and predictable over time.</p>

    <h4>Can I use my own proprietary model?</h4>
    <p>Not yet — but it’s on our roadmap.</p>

    <h4>What counts toward token usage?</h4>
    <p>Token usage is determined by the number of input tokens (what the model receives) and output tokens (what the
        model generates) for each request. Usage is tracked in real time against your organization's balance.</p>

    <h4>How does Edge Delta protect my data?</h4>
    <p>Your data is your data. Edge Delta never uses it to train our models. Retention follows your chosen settings
        (default: 30 days) and stays within your boundary for auditability. Connector credentials are encrypted, access
        is tightly controlled, and you can rotate keys anytime.</p>

    <h4>What guardrails are in place to ensure safe, compliant agent behavior?</h4>
    <p>Agents have read-only permissions by default. Agents that have been granted write permissions will always ask for
        approval before taking an action. Every action is logged for full transparency and compliance.</p>

    <h4>How do AI Teammates integrate with Edge Delta’s Telemetry Pipelines?</h4>
    <p>The AI Teammates platform is built on top of Edge Delta’s enterprise-grade Telemetry Pipelines, making it the
        only product on the market that performs continuous curation and inference on streaming data sets. Telemetry
        Pipelines are abstracted from the AI Teammates user experience, so that users see outcomes — not plumbing.
        However, users can still shape and enrich their data before it reaches any LLM using Edge Delta’s pipeline
        technology.</p>

    <h4>Can AI Teammates be customized?</h4>
    <p>Yes, AI Teammates are highly customizable. You can change a Teammate’s default prompt, permissions, and model —
        or spin up your own custom agents from scratch.</p>

    <h4>What other Teammates are available out-of-the-box?</h4>
    <p>The product currently comes with six out-of-the-box AI Teammates: the Code Reviewer Teammate, the Issue
        Coordinator Teammate, the Cloud Engineer Teammate, the DevOps Engineer Teammate, the Security Engineer Teammate,
        and the SRE Teammate. More Teammates are in the works and will be available soon.</p>
</div>

<div class="footer">
    <div class="content">
        <a href="https://edgedelta.com" aria-label="home" aria-current="page">
            <img src="https://edgedelta.com/wp-content/themes/edgedelta/assets/images/edgedeltanavlogo.svg"
                alt="Edge Delta Logo" height="24">
        </a>

        <a href="https://app.edgedelta.com/auth/login" class="gradient-btn green-blue">Get Started</a>
    </div>
</div>
