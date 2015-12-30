
          $(document).ready(function() {
              $('#profileForm').bootstrapValidator({
                  container: '#messages',
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },
                  fields: {
                      first_name: {
                          validators: {
                              notEmpty: {
                                  message: 'The first_name is required and cannot be empty'
                              }
                          }
                      },
                      last_name: {
                          validators: {
                              notEmpty: {
                                  message: 'The last_name is required and cannot be empty'
                              }
                          }
                      },
                      work_email: {
                          validators: {
                              notEmpty: {
                                  message: 'The work_email address is required and cannot be empty'
                              },
                              emailAddress: {
                                  message: 'The work_email address is not valid'
                              }
                          }
                      },
                      password: {
                          validators: {
                              notEmpty: {
                                  message: 'The password is required and cannot be empty'
                              },
                              stringLength: {
                                  max: 6,
                                  message: 'The password must be less than 6 characters long'
                              }
                          }
                      }
                  }
              });
          });
          $(document).ready(function() {
              $('#formsignin').bootstrapValidator({
                  container: '#warning',
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },
                  fields: {
                	  email: {
                          validators: {
                              notEmpty: {
                                  message: 'The email address is required and cannot be empty'
                              },
                              emailAddress: {
                                  message: 'The email address is not valid'
                              }
                          }
                      },
                      password: {
                          validators: {
                              notEmpty: {
                                  message: 'The password is required and cannot be empty'
                              },
                              stringLength: {
                                  max: 6,
                                  message: 'The password must be less than 6 characters long'
                              }
                          }
                      }
                  }
              });
          });
          $(document).ready(function() {
              $('#formforgotpassword').bootstrapValidator({
                  container: '#notification',
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },
                  fields: {
                	  email: {
                          validators: {
                              notEmpty: {
                                  message: 'The email address is required and cannot be empty'
                              },
                              emailAddress: {
                                  message: 'The email address is not valid'
                              }
                          }
                      },
                      password: {
                          validators: {
                              notEmpty: {
                                  message: 'The password is required and cannot be empty'
                              },
                              stringLength: {
                                  max: 6,
                                  message: 'The password must be less than 6 characters long'
                              }
                          }
                      }
                  }
              });
          });